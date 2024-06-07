@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-4 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold"> Bestellen </h1>
                <ul class="list-unstyled p-2">
                    <a class="text-white text-decoration-none" href="{{ route('bestelformulier') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                            <h4 class="my-1">Bestelling Plaatsen</h4>
                        </li>
                    </a>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Bestelling Herhalen</h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Bestelling Hervatten </h4></li>
                </ul>
            </div>
            @if(Auth::user() && Auth::user()->role == 'admin')
            <div name="adminknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25 mt-5">
                <h1 class="text-center fw-semibold"> Administrator </h1>
                <ul class="list-unstyled p-2">
                    <a class="text-white text-decoration-none"href="{{ route('gebruikersbeheer') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-1">
                            <h4 class="my-1">Gebruikersbeheer</h4>
                        </li>
                    </a>
                    <a class="text-white text-decoration-none" href="{{ route('databasebeheer') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mt-2">
                            <h4 class="my-1">Databasebeheer</h4>
                        </li>
                    </a>
                </ul>
            </div>
            @endif
        </div>
        <div class="col-7 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            @include('bestellingsoverzicht')
        </div>
    </div>
@endsection
