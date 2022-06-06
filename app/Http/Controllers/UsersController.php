<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    function loadView(){

        $data = ['name1' , 'name2' , 'name3'];
        return view('users',['users'=>$data]);
    }
}
