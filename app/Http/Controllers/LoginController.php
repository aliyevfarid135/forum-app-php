<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get() {
        return view('login');
    }
    public function login(Request $req) {
        if(Auth::attempt(['email'=>$req->email, 'password'=>$req->password])){
            return redirect()->route('topics');
        }
        return redirect('/login');
    }
    public function log_out(){
        Auth::logout();
        return redirect('/login');
    }
}
