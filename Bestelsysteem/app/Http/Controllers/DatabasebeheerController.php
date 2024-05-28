<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabasebeheerController extends Controller
{
    public function index()
    {
        return view('databasebeheer');
    }
}
