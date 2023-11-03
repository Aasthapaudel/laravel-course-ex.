<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dobld extends Controller
{
    //
    function viewload()
{
    $data=['anil','peter'];
    return view(' dbvlad',['user'=>'$data']);
}};
