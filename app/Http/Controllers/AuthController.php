<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    // LOGIN
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login | WisataKuy'
        ]);
    }

    // REGISTER
    public function register()
    {
        return view('auth.register', [
            'title' => 'Register | WisataKuy'
        ]);
    }

    public function registrasi(Request $request)
    {
        $request->validate([
            'name'      =>      'required',
            'notelp'    =>      'required',
            'email'     =>      'required|email|unique:users',
            'password'  =>      'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'      =>      $data['name'],
            'notelp'    =>      $data['notelp'],
            'email'     =>      $data['email'],
            'password'  =>      Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registrasi Berhasil, Login');
    }

    // VALIDASI LOGIN
    public function validasi_login(Request $request)
    {
        $request->validate([
            'email'        =>      'required',
            'password'     =>      'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
    }

    // LOGOUT
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
