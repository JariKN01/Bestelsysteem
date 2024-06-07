<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class DatabasebeheerController extends Controller
{
    public function index()
    {
        return view('admin/databasebeheer');
    }

    public function upload(Request $request)
    {
        $request->validate(['CSV' => 'required|mimes:csv,txt']);

        $csv = Reader::createFromPath($request->file('CSV')->getRealPath(), 'r');
        $csv->setHeaderOffset(0); //Skips over the first line

        foreach($csv->getRecords() as $record){
            //Iterates through all records and assigns them to the correct column
        }

        return redirect()->route('databasebeheer')->with('success', 'Bestand succesvol geüpload');
    }
}
