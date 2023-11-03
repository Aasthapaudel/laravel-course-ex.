<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class babita extends Controller
{
    //
    function viewload(){
        // return view('bab');
        return view("bab",['bab'=>['aas','bbs','cdd','ddc']]);
    }
};
