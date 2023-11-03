<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aastha extends Controller
{
    //
    function loadview($name)
    // function loadview()
    {
        return view("aar",['name'=>$name]);
        // return view("aar",['name'=>"aastha paudel"]);
    }
};
