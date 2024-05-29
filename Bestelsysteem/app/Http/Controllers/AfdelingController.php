<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfdelingController extends Controller
{
    public function index()
    {
        return view('afdeling');
    }
}
