<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(Request $req){
        $data = $req->only('login','password');

        if(Auth::attempt($data)){
            return redirect(route('admin-panel'));
        };
        return redirect()->back();

    }

}
