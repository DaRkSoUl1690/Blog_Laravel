<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reqController extends Controller
{
    //
    function testRequest(Request $request){

        return $request->input();
    }
}
