<?php

namespace App\Http\Controllers;

use App\Models\Afdeling;
use App\Models\Bestelformulier;
use App\Models\E1RspKpl2018;
use App\Models\User;
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
        $users = User::all(); // Fetches all users
        $afdelingen = Afdeling::all();
        return view('bestelformulier', compact('afdelingen','users'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * .
     */
    public function store(Request $request)
    {
        $bestelformulier = new Bestelformulier; //Geen idee maar dit klopt toch?

        // Add RSPKPL to the request
        // $rspkpl = Rspkpl::
    //                 where('kosten_plaats_id', $request->kostenplaats_naam) //Yep deze logica is questionable
        //             ->where('hoofd_rekening_id', $request->kostensoort)
        //             // ->where('sub_rekening_id', $request->vraag7) Waarom is deze commented
        //             ->first();

        // if ($request->vraag7 != "null") {
        //     $rspkpl = $rspkpl->where('sub_rekening_id', $request->vraag7)->first();
        // }
        // $request->merge(['rspkpl_id' => $rspkpl->id]);

        $bestelformulier->e1_rsp_kpl2018s_id = 1; // $request->input('kostenplaats'); //Dit moet uitgebreid worden om 3 vragen input te nemen
        $bestelformulier->fio_routes_id = 1;
        $bestelformulier->werkorders_id = 1;
        $bestelformulier->adres_id = 1;
        $bestelformulier->bedrag = (double)$request->input('bedrag');
        $request->input('bedrag_bestelbon') ? $bestelformulier->bedrag_bestelbon = $request->input('bedrag_bestelbon') : $bestelformulier->bedrag_bestelbon = false;
        // $bestelformulier->bedrag_bestelbon = $request->input('bedrag_bestelbon');
        $bestelformulier->korte_omschrijving = $request->input('korte_omschrijving');
        $bestelformulier->leverdatum = $request->input('leverdatum');
        $request->input('enterpise_one_number') ? $bestelformulier->enterprise_one_number = $request->input('enterprise_one_number') : $bestelformulier->enterprise_one_number = false;
        $bestelformulier->naam_leverancier = "naam";//$request->input('naam_leverancier');
        $bestelformulier->adres_leverancier = "adres";//$request->input('adres_leverancier');
        $bestelformulier->plaats_leverancier = "plaats";//$request->input('plaats_leverancier');
        $bestelformulier->postcode_leverancier = "postcode";//$request->input('postcode_leverancier');
        $bestelformulier->kvk_nummer = "kvk nummer";//$request->input('kvk_nummer');
        $bestelformulier->user_id = 1;

        // Hier nog alleen uitzoeken hoe je de ids krijgt via rskpl... we hebben de id's in html
        // gewoon naar kolomnamen gezet voor gemak
        // dd($bestelformulier);
        $bestelformulier->save();

        return redirect()->back();
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
