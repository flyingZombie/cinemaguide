<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CinemasController extends Controller
{
    public function root()
    {
        return view('cinemas.root');
    }
}
