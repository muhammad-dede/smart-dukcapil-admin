<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class PersyaratanController extends Controller
{
    public function index($id_layanan)
    {
        $model = Persyaratan::where('id_layanan', $id_layanan)->orderBy('persyaratan', 'asc')->get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('status', function ($model) {
                return view('app.layanan.persyaratan.status', [
                    'persyaratan' => $model,
                ]);
            })
            ->addColumn('action', function ($model) {
                return view('app.layanan.persyaratan.action', [
                    'persyaratan' => $model,
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create($id_layanan)
    {
        $persyaratan = new Persyaratan();
        $layanan = Layanan::where('id', $id_layanan)->first();
        return view('app.layanan.persyaratan.modal-form', compact('persyaratan', 'layanan'));
    }

    public function store(Request $request, $id_layanan)
    {
        $validator = Validator::make($request->all(), [
            'persyaratan' => 'required|string|max:255',
            'type_backend' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        Persyaratan::create([
            'id_layanan' => $id_layanan,
            'persyaratan' => ucwords(strtolower($request->persyaratan)),
            'input_name' => 'scan_' . str_replace(' ', '_', $request->persyaratan),
            'type_frontend' => $request->type_backend == 'png,jpg,jpeg' ? '.png, .jpg, .jpeg' : '.pdf',
            'type_backend' => $request->type_backend,
            'aktif' => true,
        ]);

        return response()->json(['status' => 200, 'message' => 'Berhasil menambahkan persyaratan']);
    }

    public function edit($id_persyaratan)
    {
        $persyaratan = Persyaratan::findOrFail($id_persyaratan);
        return view('app.layanan.persyaratan.modal-form', compact('persyaratan'));
    }

    public function update(Request $request, $id_persyaratan)
    {
        $validator = Validator::make($request->all(), [
            'persyaratan' => 'required|string|max:255',
            'type_backend' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
        }

        Persyaratan::where('id', $id_persyaratan)->update([
            'persyaratan' => ucwords(strtolower($request->persyaratan)),
            'input_name' => 'scan_' . str_replace(' ', '_', strtolower($request->persyaratan)),
            'type_frontend' => $request->type_backend == 'png,jpg,jpeg' ? '.png, .jpg, .jpeg' : '.pdf',
            'type_backend' => $request->type_backend,
        ]);

        return response()->json(['status' => 200, 'message' => 'Berhasil mengubah persyaratan']);
    }

    public function status($id_persyaratan)
    {
        $layanan = Persyaratan::findOrFail($id_persyaratan);
        $layanan->update([
            'aktif' => $layanan->aktif ? false : true,
        ]);

        return redirect()->back()->with('success', 'Berhasil mengubah status persyaratan');
    }
}
