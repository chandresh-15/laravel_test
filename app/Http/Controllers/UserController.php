<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    function test(){
        $a = "Chandresh";
        return view('myView', compact('a'));
    }
}
?>
