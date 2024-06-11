@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bestellingen</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Leverdatum</th>
                <th>Enterprise One Number</th>
                <th>Naam Leverancier</th>
                <th>Adres Leverancier</th>
                <th>Plaats Leverancier</th>
                <th>Postcode Leverancier</th>
                <th>KVK Nummer</th>
                <th>Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bestelformulieren as $bestelformulier)
                <tr>
                    <td>{{ $bestelformulier->leverdatum }}</td>
                    <td>{{ $bestelformulier->enterprise_one_number }}</td>
                    <td>{{ $bestelformulier->naam_leverancier }}</td>
                    <td>{{ $bestelformulier->adres_leverancier }}</td>
                    <td>{{ $bestelformulier->plaats_leverancier }}</td>
                    <td>{{ $bestelformulier->postcode_leverancier }}</td>
                    <td>{{ $bestelformulier->kvk_nummer }}</td>
                    <td>
                        <a href="{{ route('bestellingen.show', $bestelformulier->id) }}">Bekijk details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
