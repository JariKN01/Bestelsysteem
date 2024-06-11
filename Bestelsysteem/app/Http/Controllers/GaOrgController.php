<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaOrg;

class GaOrgController extends Controller
{
    public function getNaamByLangNr(Request $request){
        $langNr = $request->input('langNr');
        $gaOrg = GaOrg::where('langNr', $langNr)->first();

        if ($gaOrg) {
            return response()->json([
                'naam' => $gaOrg->naam,
                'departement' => $gaOrg->department // Voeg de 'departement' eigenschap toe aan de respons
            ]);
        } else {
            return response()->json(['error' => "Geen record gevonden voor langNr: $langNr"], 404);
        }
    }
}
