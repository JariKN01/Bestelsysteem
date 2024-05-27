@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-3 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold"> Gebruikersbeheer </h1>
                <ul class="list-unstyled p-2">
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2"><h4 class="my-1"> Huidige gebruikers </h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2"><h4 class="my-1"> Nieuwe registraties</h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2"><h4 class="my-1"> Excelbestand uploaden</h4></li>
                </ul>
            </div>
            <div class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2"><h4 class="my-1"> Databasebeheer </h4></div>

        </div>
        <div name="bestellingsoverzicht" class="col-8 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            <h1 class="text-center mb-0 fw-semibold mb-2"> Gebruikers </h1>
            <button type="button" class="btn btn-primary"> Zoekbalk </button>
            <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-3 fw-semibold">Functie</h4>
                    <h4 class="col-3 fw-semibold">Naam</h4>
                    <h4 class="col-3 fw-semibold">Email</h4>
                    <h4 class="col-3 fw-semibold">Acties</h4>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly mb-2">
                    <p class="mt-0 mb-0 col-3">12/12/2022</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-3">26/12/2022</p>
                    <p class="mt-0 mb-0 col-3">1345678901</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-3">2/1/2023</p>
                    <p class="mt-0 mb-0 col-3">1456789012</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-3">13/1/2023</p>
                    <p class="mt-0 mb-0 col-3">1567890123</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-3">24/1/2023</p>
                    <p class="mt-0 mb-0 col-3">1678901234</p>
                    <p class="mt-0 mb-0 col-3">1234567890</p>
                    <p class="mt-0 mb-0 col-3"></p>
                </li>
            </ul>

        </div>
    </div>
@endsection
