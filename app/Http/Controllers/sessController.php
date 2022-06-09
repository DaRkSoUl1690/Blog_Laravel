<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessController extends Controller
{
    //
    function userLogin(Request $request)
    {
        $data =  $request->input('username');
        $request->session()->put('username', $data);

        return redirect('profile');
    }
}
