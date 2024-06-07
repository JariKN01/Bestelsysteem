@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-4 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold"> Databasebeheer </h1>
                <ul class="list-unstyled p-2">
                    <a class="text-white text-decoration-none" href="{{ route('bestelformulier') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                            <h4 class="my-1">Bestelformulier </h4>
                        </li>
                    </a>
                    <a class="text-white text-decoration-none" href="{{ route('afdeling') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                            <h4 class="my-1">Afdeling </h4>
                        </li>
                    </a>
                    <a class="text-white text-decoration-none" href="{{ route('categorie') }}">
                        <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                            <h4 class="my-1">Categorie </h4>
                        </li>
                    </a>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Budgethouders </h4>
                    </li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Kostenplaats </h4>
                    </li>
                </ul>
            </div>
            <a class="text-white text-decoration-none" href="{{ route('gebruikersbeheer') }}">
                <div class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                    <h4 class="my-1">Gebruikersbeheer</h4>
                </div>
            </a>

        </div>
        <div name="bestellingsoverzicht" class="col-7 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            <h1 class="text-center mb-0 fw-semibold mb-2"> CSV Bestand Uploaden </h1>
            <form action="{{route('databasebeheer/upload')}}" method="POST">
                @csrf
                @method('POST')
                <div class="input-group w-50 mx-auto">
                    <input type="file" class="form-control" id="file_input">
                    <button class="btn btn-primary border border-secondary border-opacity-25 bg-gradient shadow-sm text-center" type="submit" id="upload_knop">Upload</button>
                </div>
            </form>
            {{-- <div class="col-12 d-flex justify-content-end">
                <form class="form-inline col-2 mb-2">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div> --}}
            {{-- <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-4 fw-semibold">Datum</h4>
                    <h4 class="col-4 fw-semibold">Bestelling</h4>
                    <h4 class="col-4 fw-semibold"></h4>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly mb-2">
                    <p class="mt-0 mb-0 col-4">12/12/2022</p>
                    <p class="mt-0 mb-0 col-4">1234567890</p>
                    <p class="mt-0 mb-0 col-4"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-4">26/12/2022</p>
                    <p class="mt-0 mb-0 col-4">1345678901</p>
                    <p class="mt-0 mb-0 col-4"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-4">2/1/2023</p>
                    <p class="mt-0 mb-0 col-4">1456789012</p>
                    <p class="mt-0 mb-0 col-4"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-4">13/1/2023</p>
                    <p class="mt-0 mb-0 col-4">1567890123</p>
                    <p class="mt-0 mb-0 col-4"></p>
                </li>
                <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                    <p class="mt-0 mb-0 col-4">24/1/2023</p>
                    <p class="mt-0 mb-0 col-4">1678901234</p>
                    <p class="mt-0 mb-0 col-4"></p>
                </li>
                <button type="button" class="fw-bold rounded bg-primary bg-opacity-75 border border-primary border-opacity-50 bg-gradient shadow-sm text-center text-white p-2">Opslaan</button>
            </ul> --}}

        </div>
    </div>
@endsection
