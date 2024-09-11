<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('Layout.Login');
    }

    public function Authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
        if (Auth::attempt($credentials)) {
            $credentials = auth()->user();
            if ($credentials->status == '1') {
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect('/');
            } else {
                auth()->logout();
            }
        }
        Alert::error('Username Dan Password Tidak Dikenali');
        return back();
    }
}
