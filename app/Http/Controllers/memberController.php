<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class memberController extends Controller
{
    //
    function addData(Request $request){
             $user = new Users();
             $user->name = $request->username;
             $user->email = $request->email;
             $user->address = $request->address;
             $user->save();
             return redirect('add');
    }
}
