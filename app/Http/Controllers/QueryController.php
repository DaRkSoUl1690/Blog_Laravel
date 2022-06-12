<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    //
    function operations(){
          $data = table('users')->get();
          return view('queryList',['users' => $data]);
    }
}
