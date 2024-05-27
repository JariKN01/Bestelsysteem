<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GebruikersbeheerController extends Controller
{
    public function index()
    {
        return view('gebruikersbeheer');
    }
}
