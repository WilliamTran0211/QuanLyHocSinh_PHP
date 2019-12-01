<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function loadUsers(){
        return view('Users')->with('Users');
    }
}
