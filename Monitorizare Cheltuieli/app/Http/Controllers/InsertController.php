<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;
use App\Cheltuieli;
use Illuminate\Support\Facades\Hash;

class InsertController extends Controller
{
    public function insert(Request $request){


        $this->validate($request, [
            'nume'=>'required',
            'prenume'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = new Post;
        $password = Input::get('password');
        $user->nume = Input::get('nume');
        $user->prenume = Input::get('prenume');
        $user->username = Input::get('username');
        $user->password = Hash::make($password);
        $user->save();
        return redirect('/');

    }

    public function insertCheltuieli(){
        $cheltuieli = new Cheltuieli();
        $cheltuieli->user_id = Auth::id();
        $cheltuieli->luna = Input::get('luna');
        $cheltuieli->cheltuieli = Input::get('textview');
        $cheltuieli->save();
        return redirect('/calculator');
    }
    public function month(){



        $month = Input::get('luna');

        return redirect('/home',compact('month'));
    }
}
