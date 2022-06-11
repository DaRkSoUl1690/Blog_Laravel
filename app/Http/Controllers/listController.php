<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class listController extends Controller
{
    //
    function list(){
        $data =  Users::all();
        return view('list',['users' => $data]);
        
    }
}
