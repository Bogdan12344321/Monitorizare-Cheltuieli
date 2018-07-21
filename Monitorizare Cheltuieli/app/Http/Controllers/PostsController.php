<?php

namespace App\Http\Controllers;

use App\Cheltuieli;
use App\Post;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{


    public function index(){
        return view('welcome');
    }
    public function home(){
        function __construct()
        {
            $this->middleware('auth');
        }
        $month = Input::get('luna');

        $cheltuieli = Cheltuieli::where(['luna' => $month])->paginate(17);

        $user = Post::all()->toArray();

        $sum = 0;

        foreach($cheltuieli as $row) {
            $numbers = $row['cheltuieli'];
            $sum += $numbers;
        }

        return view('pages.home',compact('cheltuieli','user','sum','month'));

    }
    public function calculator(){
        $user_id = session('id');
        return view('pages.calculator',compact('user_id'));
    }
    public function user(){
        $users = Post::all()->toArray();
        return view('pages.user',compact('users'));
    }
    public function register(){
        return view('pages.register');
    }
}
