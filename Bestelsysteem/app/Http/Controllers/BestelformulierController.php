<?php

namespace App\Http\Controllers;

use App\Models\Bestelformulier;
use Illuminate\Http\Request;

class BestelformulierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bestelformulier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bestelformulier $bestelformulier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bestelformulier $bestelformulier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bestelformulier $bestelformulier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bestelformulier $bestelformulier)
    {
        //
    }
}
