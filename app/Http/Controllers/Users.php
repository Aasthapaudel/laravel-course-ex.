<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
public function index($user)
    {
        echo"Hello from controller";
        echo $user;

        // return['name'=>"aastha",'age'=>27];
    }
    function loadview()

    {
        return view("Users");
    }
}
