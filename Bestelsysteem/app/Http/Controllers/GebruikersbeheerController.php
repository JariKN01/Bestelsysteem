<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GebruikersbeheerController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetches all users
        return view('gebruikersbeheer', compact('users')); // Correctly passing the variable
    }
}
