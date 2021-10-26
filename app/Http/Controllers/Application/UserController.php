<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('app.user.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|regex:/^\S*$/u|unique:user,username',
            'email' => 'required|string|email|max:255|unique:user,email',
            'is_admin' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        User::create([
            'nama' => ucwords($request->nama),
            'username' => strtolower($request->username),
            'email' => $request->email,
            'password' => Hash::make('dukcapil' . date('Y')),
            'profil' => 'default.svg',
            'is_admin' => $request->is_admin ? true : false,
            'aktif' => true,
        ]);
        return response()->json(['status' => 200, 'message' => 'Berhasil menambahkan user baru!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('app.user.form', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255|regex:/^\S*$/u|unique:user,username,' . $id . ',id',
            'email' => 'required|string|email|max:255|unique:user,email,' . $id . ',id',
            'is_admin' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        User::where('id', $id)->update([
            'nama' => ucwords($request->nama),
            'username' => strtolower($request->username),
            'email' => $request->email,
            'is_admin' => $request->is_admin ? true : false,
        ]);

        return response()->json(['status' => 200, 'message' => 'Berhasil mengubah user!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        User::where('id', $id)->update([
            'aktif' => $user->aktif ? false : true,
        ]);

        return response()->json(['status' => 200, 'message' => 'Berhasil mengubah status!']);
    }

    public function data()
    {
        $model = User::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('app.user._action', [
                    'model' => $model,
                    'url_edit' => route('user.edit', $model->id),
                    'url_destroy' => route('user.destroy', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->editColumn('is_admin', '{{ $is_admin ? "Administrator" : "Operator" }}')
            ->rawColumns(['action'])
            ->make(true);
    }
}
