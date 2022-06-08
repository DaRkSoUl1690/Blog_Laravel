<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class demoController extends Controller
{
    // and the Json file will be loaded into the web page;
    function index()
    {
        //    return  Http::get('url');

        $data  =  Http::get('url');
        return view('users',['collection' => $data['data']]);
    }
}
