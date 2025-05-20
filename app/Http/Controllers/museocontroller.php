<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class museocontroller extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
}

