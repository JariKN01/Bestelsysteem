@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bestelling Details</h1>
{{--        <p>Afdeling van budgethouder: {{ $bestelformulier->afdeling->naam }}</p>--}}
        <p>Leverdatum: {{ $bestelformulier->leverdatum }}</p>
        <p>Enterprise One Number: {{ $bestelformulier->enterprise_one_number }}</p>
        <p>Naam Leverancier: {{ $bestelformulier->naam_leverancier }}</p>
        <p>Adres Leverancier: {{ $bestelformulier->adres_leverancier }}</p>
        <p>Plaats Leverancier: {{ $bestelformulier->plaats_leverancier }}</p>
        <p>Postcode Leverancier: {{ $bestelformulier->postcode_leverancier }}</p>
        <p>KVK Nummer: {{ $bestelformulier->kvk_nummer }}</p>
    </div>
@endsection
