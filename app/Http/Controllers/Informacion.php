<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informacion extends Controller
{
    function info(){
        return view('sobremi');
    }
}
