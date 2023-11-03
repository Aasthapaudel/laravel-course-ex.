<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aas extends Controller
{
    //
    public function index($user)

    {
        // echo $user;
        // echo  " hello from controller";
        return['name'=>"aastha", 'age'=>22];
        // return view()

    }
}
