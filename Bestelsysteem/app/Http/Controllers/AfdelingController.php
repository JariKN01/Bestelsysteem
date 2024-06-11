<?php

namespace App\Http\Controllers;

use App\Models\Bestelformulier;
use App\Models\Afdeling;
use Illuminate\Http\Request;

class AfdelingController extends Controller
{
    public function index()
    {
        $afdelings = Afdeling::all();
        return view('bestelformulier', compact('afdelings'));
    }

    public function getBudgethouder($id)
    {
        $budgethouders = Budgethouder::where('afdeling_id', $id)->get();
        return response()->json($budgethouders);
    }
}
