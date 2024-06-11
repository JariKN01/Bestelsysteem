<?php

namespace App\Http\Controllers;

use App\Models\Afdeling;
use App\Models\Bestelformulier;
use App\Models\FioRoute;
use App\Models\KostenplaatsType;
use App\Models\Kostenplaats;
use App\Models\EconomischeCategorie;
use App\Models\Hoofdrekening;
use App\Models\Subrekening;
use App\Models\E1RspKpl2018;
use App\Models\GaOrg;
use App\Models\User;
use Illuminate\Http\Request;

class BestelformulierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bestelformulieren = Bestelformulier::all();

        return view('bestelligen.index', ['bestelformulieren' => $bestelformulieren]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Must join users and ga_orgs table to get role + name + id
        // $budgethouders = User::join('GaOrgs', 'Users.GOARG_langNr', '=', 'GaOrgs.langNr')->get();
        $budgethouders = User::where('role', "budgethouder")->get();
        $afdelingen = Afdeling::all();
        $kostenplaatstypes = KostenplaatsType::all();
        $kostenplaatsen = Kostenplaats::all();
        $categorieen = EconomischeCategorie::all();
        $kostensoorten = Hoofdrekening::all();
        $kostencodes = Subrekening::all();
        $fio_routes = FioRoute::all();
        return view('bestelformulier', compact('afdelingen','budgethouders', 'kostenplaatstypes', 'kostenplaatsen', 'categorieen', 'kostensoorten', 'kostencodes', 'fio_routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * .
     */
    public function store(Request $request)
    {
        $bestelformulier = new Bestelformulier; //Geen idee maar dit klopt toch?

        $bestelformulier->e1_rsp_kpl2018s_id = 1; // $request->input('kostenplaats'); //Dit moet uitgebreid worden om 3 vragen input te nemen


        // Add RSPKPL to the request
//        $rspkpl = Rspkpl::where('kosten_plaats_id', $request->vraag4)
//            ->where('hoofd_rekening_id', $request->vraag6)
//            // ->where('sub_rekening_id', $request->vraag7)
//            ->first();
//
//        if ($request->vraag7 != "null") {
//            $rspkpl = $rspkpl->where('sub_rekening_id', $request->vraag7)->first();
//        }
//      $request->merge(['rspkpl_id' => $rspkpl->id]);

//        dd($request->all());
        $bestelformulier->fio_routes_id = $request->input('fio_routes_id');
        $bestelformulier->werkorders_id = 1;
        $bestelformulier->adres_id = 1;
        $bestelformulier->bedrag = (double)$request->input('bedrag');
        $request->input('bedrag_bestelbon') ? $bestelformulier->bedrag_bestelbon = $request->input('bedrag_bestelbon') : $bestelformulier->bedrag_bestelbon = false;
        // $bestelformulier->bedrag_bestelbon = $request->input('bedrag_bestelbon');
        $bestelformulier->korte_omschrijving = $request->input('korte_omschrijving');
        $bestelformulier->leverdatum = $request->input('leverdatum');
//        $request->input('enterpise_one_number') ? $bestelformulier->enterprise_one_number = $request->input('enterprise_one_number') : $bestelformulier->enterprise_one_number = false;
        $bestelformulier->enterprise_one_number = $request->input('enterprise_one_number');
        $bestelformulier->naam_leverancier = $request->input('naam_leverancier');
        $bestelformulier->adres_leverancier = $request->input('adres_leverancier');
        $bestelformulier->plaats_leverancier = $request->input('plaats_leverancier');
        $bestelformulier->postcode_leverancier = $request->input('postcode_leverancier');
        $bestelformulier->kvk_nummer = $request->input('kvk_nummer');
        $bestelformulier->user_id = 1;

        // Hier nog alleen uitzoeken hoe je de ids krijgt via rskpl... we hebben de id's in html
        // gewoon naar kolomnamen gezet voor gemak
        // dd($bestelformulier);
        $bestelformulier->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bestelformulier $bestelformulier, $id)
    {
        $bestelformulier = Bestelformulier::findOrFail($id);
        $afdeling = Afdeling::find($bestelformulier->afdeling_id);

        return view('bestelligen.show', ['bestelformulier' => $bestelformulier, 'afdeling' => $afdeling]);
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
