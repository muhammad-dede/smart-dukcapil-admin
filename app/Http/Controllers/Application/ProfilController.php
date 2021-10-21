<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\ConfirmPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    public function index()
    {
        return view('app.profil.index');
    }

    public function update(Request $request, $form)
    {
        if ($form == 'biodata') { // Biodata
            if ($request->file('profil')) {
                $validator_profil = Validator::make($request->all(), [
                    'profil' => 'required|mimes:png,jpg,jpeg|max:1024',
                ]);
                if ($validator_profil->fails()) {
                    return response()->json(['status' => 400, 'message' => $validator_profil->errors()->toArray()]);
                }

                if (auth()->user()->profil !== 'default.svg') {
                    File::delete('images/profil/' . auth()->user()->profil);
                }

                $profil = 'profil-' . auth()->user()->username . '.' . $request->profil->extension();
                $request->profil->move(public_path('images/profil'), $profil);
            } else {
                $profil = auth()->user()->profil;
            }

            $validator = Validator::make($request->all(), [
                'nama' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
            }

            User::where('id', auth()->id())->update([
                'profil' => $profil,
                'nama' => ucwords($request->nama),
            ]);

            return response()->json(['status' => 200, 'message' => 'Profil berhasil diperbaharui']);
        } elseif ($form == 'username') { //Username
            $validator = Validator::make($request->all(), [
                'username' => 'required|string|regex:/^\S*$/u|unique:pelapor,username,' . auth()->id() . ',id',
                'password_confirmation_username' => ['required', 'string', new ConfirmPassword],
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
            }

            User::where('id', auth()->id())->update([
                'username' => strtolower($request->username),
            ]);

            return response()->json(['status' => 200, 'message' => 'Username berhasil diperbaharui']);
        } elseif ($form == 'email') { //Email
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:pelapor,email,' . auth()->id() . ',id',
                'password_confirmation_email' => ['required', 'string', new ConfirmPassword],
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
            }

            User::where('id', auth()->id())->update([
                'email' => strtolower($request->email),
            ]);

            return response()->json(['status' => 200, 'message' => 'Email berhasil diperbaharui']);
        } elseif ($form == 'password') { //Password
            $validator = Validator::make($request->all(), [
                'current_password' => ['required', 'string', new ConfirmPassword],
                'password' => 'required|confirmed|min:8',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'message' => $validator->errors()->toArray()]);
            }

            User::where('id', auth()->id())->update([
                'password' => Hash::make($request->password),
            ]);

            return response()->json(['status' => 200, 'message' => 'Password berhasil diperbaharui']);
        } else {
            return response()->json(['status' => 401, 'message' => 'Unauthorization']);
        }
    }
}
