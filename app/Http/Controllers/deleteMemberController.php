<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class deleteMemberController extends Controller
{
    //
    function list()
    {

        $data = Users::all();
        return view('deleteList', ['users' => $data]);
    }
    function delete($id)
    {
        $data = Users::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data = Users::find($id);
        return view('edit', ['users' => $data]);
    }
    function update(Request $request)
    {
        $data = Users::find($request->id);

        $data->name = $request->username;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();

        return redirect('list');

    }
}
