<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    //
    function store(Request $request)
    {
        $data = $request->input('username');
        $request ->session()->flash('username', $data);
        return redirect('store');
    }
}
