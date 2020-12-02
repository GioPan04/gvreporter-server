<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function make(Request $request) {
        $credentials = $request->only('username', 'password');
        Validator::make($credentials, [
            'username' => 'required',
            'password' => 'required'
        ])->validate();
        if(Auth::attempt($credentials)) {
            return redirect()->route('admin::home');
        } else {
            return back()->withInput($request->only(['username']));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
