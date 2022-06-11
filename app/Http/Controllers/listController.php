<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class listController extends Controller
{
    //
    function list(){
        $data =  Users::paginate(5);
        return view('list',['users' => $data]);

    }
}
