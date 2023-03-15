<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // function index()
    // {
    //     return view("freeuser/index");
    // }

    function beranda()
    {
        return view("freeuser/index");
    }

    function about()
    {
        return view("freeuser/about");
    }
}
