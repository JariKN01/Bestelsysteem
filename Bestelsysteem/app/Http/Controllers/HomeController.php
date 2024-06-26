<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bestelformulier;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bestellingen = Bestelformulier::all();
        return view('home', compact('bestellingen'));
    }
    public function showBestellingsoverzicht()
    {
        $bestellingen = Bestelformulier::all();

        return view('bestellingsoverzicht', ['bestellingen' => $bestellingen]);
    }
}
