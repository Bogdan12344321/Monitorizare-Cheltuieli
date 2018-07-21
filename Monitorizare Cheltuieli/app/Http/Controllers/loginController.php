<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required'

        ]);

        $username = $req->input('username');
        $password = $req->input('password');

        $credentials = [
            'username' => $username,
            'password' => $password,
        ];


        if (Auth::attempt($credentials)){

            session(['user' => $username]);
            return redirect('/home');

        } else {

            return 'Failure';

        }
    }
}
