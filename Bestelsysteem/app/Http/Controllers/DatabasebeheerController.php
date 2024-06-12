<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;
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

class DatabasebeheerController extends Controller
{
    public function index()
    {
        return view('admin/databasebeheer');
    }

    public function upload(Request $request)
    {
        $request->validate(['CSV' => 'required|mimes:csv,txt']);
        // getColumns($request->input('tabelselectie'));

        $csv = Reader::createFromPath($request->file('CSV')->getRealPath(), 'r');
        $csv->setHeaderOffset(0); //Skips over the first line

        foreach($csv->getRecords() as $record){
            //Iterates through all records and assigns them to the correct column
        }
        return redirect()->route('databasebeheer')->with('success', 'Bestand succesvol geüpload');
    }

    public function getColumns(string $tabel){ //Function to get the right columns for all the models because database isn't 1:1 with csv files
        $kolommen = [];
        if($tabel == "ga_org"){
            //$kolommen = All columns from tables needed to sort the ga_org CSV (ga_orgs & afdelings['naam'])
        }

        return $kolommen;
    }
}
