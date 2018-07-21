<?php

namespace App\Http\Controllers;

use App\Cheltuieli;
use Illuminate\Http\Request;
use App\Post;

class UserController extends Controller
{
    public function delete($id)
    {

        Post::where('id', $id)->delete();

        Cheltuieli::where('user_id', $id)->delete();

        return redirect('/utilizatori');

    }
    public function update($id)
    {

        Post::where('id', $id)->update(['options->enabled' => true]);

        return redirect('/utilizatori');

    }
}
