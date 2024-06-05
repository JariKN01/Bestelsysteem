@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-3 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold"> Gebruikersbeheer </h1>
                <ul class="list-unstyled p-2">
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                        <h4 class="my-1"> Huidige gebruikers </h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Nieuwe registraties</h4></li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Excelbestand uploaden</h4></li>
                </ul>
            </div>
            <div
                class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                <h4 class="my-1"><a class="text-white" href="{{ route('databasebeheer') }}">Databasebeheer</a></h4>
            </div>

        </div>
        <div name="bestellingsoverzicht" class="col-8 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            <h1 class="text-center mb-0 fw-semibold mb-2"> Gebruikers </h1>
            <div class="col-12 d-flex justify-content-end">
                <form class="form-inline">
                    <input id="searchInput" class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center" id="myUL">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-3 fw-semibold">Functie</h4>
                    <h4 class="col-3 fw-semibold">Naam</h4>
                    <h4 class="col-3 fw-semibold">Email</h4>
                    <h4 class="col-3 fw-semibold">Acties</h4>
                </li>
                @forelse($users as $user)
                    <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2">
                        <p class="mt-0 mb-0 col-3">{{ $user->role }}</p>
                        <p class="mt-0 mb-0 col-3">{{ $user->name }}</p>
                        <p class="mt-0 mb-0 col-3">{{ $user->email }}</p>
                        <p class="mt-0 mb-0 col-3">{{ $user->updated_at }}</p>
                    </li>
                @empty
                    <p>No users found for your search.</p>
                @endforelse
            </ul>
        </div>
    </div>

@endsection
