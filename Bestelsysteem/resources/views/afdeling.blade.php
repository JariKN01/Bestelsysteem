@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-4 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold"> Databasebeheer </h1>
                <ul class="list-unstyled p-2">
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                        <h4 class="my-1"><a class="text-white" href="{{ route('bestelformulier') }}">
                                Bestelformulier </a></h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Afdeling</h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Categorie </h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Budgethouders </h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Kostenplaats </h4></li>
                </ul>
            </div>
            <div
                class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                <h4 class="my-1"><a class="text-white" href="{{ route('databasebeheer') }}">Databasebeheer</a></h4>
            </div>

        </div>
        <div name="bestellingsoverzicht" class="col-7 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            <h1 class="text-center mb-0 fw-semibold mb-2"> Afdeling </h1>
            <div class="col-12 d-flex justify-content-end">
                <form class="form-inline">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-6 fw-semibold">Netwerk</h4>
                    <h4 class="col-6 fw-semibold">préBIO</h4>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly mb-2">
                    <p class="mt-0 mb-0 col-4">AC-Aankoopcentrale</p>
                    <p class="mt-0 mb-0 col-4">Inkoop/aankoop, Contract/Subsidies en Juridsche advies</p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-4">AC-Aankoopcentrale</p>
                    <p class="mt-0 mb-0 col-4">Inkoop/aankoop, Contract/Subsidies en Juridsche advies</p>
                </li>
                <button type="button" class="btn btn-primary"> Opslaan</button>
            </ul>

        </div>
    </div>
@endsection
