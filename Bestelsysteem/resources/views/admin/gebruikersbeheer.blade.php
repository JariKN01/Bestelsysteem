@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-evenly">
        <div name="knoppenlijsten" class="col-3 col-sm-3 text-center">
            <div name="bestelknoppen" class="rounded p-3 bg-gradient bg-primary bg-opacity-25">
                <h1 class="text-center fw-semibold">Gebruikersbeheer</h1>
                <ul class="list-unstyled p-2">
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 mb-2">
                        <h4 class="my-1"> Huidige gebruikers </h4>
                    </li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Nieuwe registraties</h4>
                    </li>
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Excelbestand uploaden</h4>
                    </li>
                </ul>
            </div>
            <a class="text-white text-decoration-none" href="{{route('databasebeheer')}}">
                <div class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                    <h4 class="my-1">Databasebeheer</h4>
                </div>
            </a>
        </div>

        <div name="bestellingsoverzicht" class="col-8 rounded p-3 bg-gradient bg-primary bg-opacity-25">
            <h1 class="text-center mb-0 fw-semibold mb-2"> Gebruikers </h1>
            <div class="col-12 d-flex justify-content-end">
                <form class="form-inline col-2 mb-2">
                    <input id="zoekbalk" class="form-control" type="search" placeholder="Zoek">
                </form>
            </div>
            <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-3 fw-semibold">Rol</h4>
                    <h4 class="col-3 fw-semibold">Naam</h4>
                    <h4 class="col-3 fw-semibold">Email</h4>
                    <h4 class="col-3 fw-semibold">Geüpdatet</h4>
                </li>
                @forelse($users as $user)
                    <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2" data-bs-toggle="modal" data-bs-target="#popup" id={{$user->id}}>
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

    <div class="modal fade" id="popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> 
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Gebruiker Aanpassen</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="popupuserdata">
                    <p id="popupuserrole"></p>
                    <p id="popupusername"></p>
                    <p id="popupuseremail"></p>
                    <p id="popupuserupdated"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="rounded bg-white bg-gradient border shadow-sm text-black text-center p-2" data-bs-dismiss="modal">Annuleren</button>
                    <button type="button" class="fw-bold rounded bg-primary bg-opacity-75 border border-primary border-opacity-50 bg-gradient shadow-sm text-center text-white p-2">Opslaan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        var popupuserrole = document.getelementbyid('popupuserrole');
        var popupusername = document.getelementbyid('popupusername');
        var popupuseremail = document.getelementbyid('popupuseremail');
        var popupuserupdated = document.getelementbyid('popupuserupdated');

        function modal(id) {
            fetch('/api/users/' + id)

        }
    </script> --}}
    {{-- We honestly have no clue how to fix user display simply, either API/AJAX or go through controller.show --}}

@endsection
