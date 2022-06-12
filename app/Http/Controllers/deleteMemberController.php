<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class deleteMemberController extends Controller
{
    //
    function list(){

        $data = Users::all();
        return view('deleteList',['users'=>$data]);
    }
    function delete($id){
        $data = Users::find($id);
        $data->delete();
        return redirect('list');

    }
}
