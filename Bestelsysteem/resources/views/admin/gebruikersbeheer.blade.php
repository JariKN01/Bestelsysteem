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
                    <a class="text-white text-decoration-none" href="{{route('user.create')}}">
                    <li class="shadow shadow-bm rounded text-white border border-primary border-opacity-50 font-bold p-1 bg-primary bg-gradient bg-opacity-75 my-2">
                        <h4 class="my-1"> Nieuwe registraties</h4>
                    </li>
                    </a>
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
                    <input id="zoekbalk" class="form-control" type="search" placeholder="Zoek" onkeyup="searchUsers()">
                </form>
            </div>
            <ul id="userList"class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
                <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
                    <h4 class="col-2 fw-semibold">Rol</h4>
                    <h4 class="col-2 fw-semibold">LangNr</h4>
                    <h4 class="col-3 fw-semibold">Email</h4>
{{--                    <h4 class="col-2 fw-semibold">Geüpdatet</h4>--}}
                    <h4 class="col-3 fw-semibold">Naam</h4>
                    <h4 class="col-2 fw-semibold">Afdeling</h4>
                </li>
                @forelse($users as $user)
                    <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly my-2 user-item" data-bs-toggle="modal" data-bs-target="#popup" data-user="{{ json_encode($user) }}"
                        data-user-id="{{ $user->id }}"
                        data-user-role="{{ $user->role }}"
                        data-user-langnr="{{ $user->GOARG_langNr }}"
                        data-user-email="{{ $user->email }}"
                        data-user-updated="{{ $user->updated_at }}"
                        data-user-naam="{{ optional($user->gaOrg)->naam }}"
                        data-user-departement="{{ optional($user->gaOrg)->departement }}">

                        <p class="mt-0 mb-0 col-2">{{ $user->role }}</p>
                        <p class="mt-0 mb-0 col-2">{{ $user->GOARG_langNr }}</p>
                        <p class="mt-0 mb-0 col-3">{{ $user->email }}</p>
{{--                        <p class="mt-0 mb-0 col-2">{{ $user->updated_at }}</p>--}}
                        <p class="mt-0 mb-0 col-3">{{ optional($user->gaOrg)->naam }}</p>
                        <p class="mt-0 mb-0 col-2">{{ optional($user->gaOrg)->departement }}</p>
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
                <form id="editUserForm" method="POST" action="{{ route('users.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" name="id" id="popupuserid">
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" name="role" id="popupuserrole">
                                <option value="admin">Admin</option>
                                <option value="besteller">Besteller</option>
                                <option value="budgethouder">Budgethouder</option>
                                <option value="crediteur">Crediteur</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="GOARG_langNr" class="form-label">LangNr</label>
                            <input type="text" class="form-control" name="GOARG_langNr" id="popupuserlangnr">
                        </div>
                        <div class="mb-3">
                            <label for="naam" class="form-label">Naam</label>
                            <input type="text" class="form-control" name="naam" id="popupusernaam">
                        </div>
                        <div class="mb-3">
                            <label for="departement" class="form-label">Afdeling</label>
                            <input type="text" class="form-control" name="departement" id="popupuserdepartement">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="popupuseremail">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="deleteUserBtn">Verwijderen</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleren</button>
                        <button type="submit" class="btn btn-primary">Opslaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('deleteUserBtn').addEventListener('click', function() {
            if (confirm('Are you sure you want to delete this user?')) {
                var userId = document.getElementById('popupuserid').value;
                fetch('/gebruikersbeheer/' + userId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                })
                    .then(response => {
                        if (response.ok) {
                            // Handle successful deletion (e.g., redirect or refresh page)
                            window.location.reload(); // Example: Refresh the page
                        } else {
                            // Handle error
                            console.error('Error:', response.statusText);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#budgethouder_naam').change(function() {
                var langNr = $(this).val();
                $.ajax({
                    url: "/ga-org/naam/" + langNr,
                    method: "GET",
                    success: function(data) {
                        if (data.naam) {
                            // Toon de naam in een HTML-element met id 'naam'
                            $('#naam').text(data.naam);
                        } else {
                            // Toon een foutbericht als er geen naam is gevonden
                            $('#naam').text('Geen naam gevonden voor langNr: ' + langNr);
                        }
                    },
                    error: function() {
                        // Toon een foutbericht als het verzoek mislukt
                        $('#naam').text('Er is een fout opgetreden bij het ophalen van de naam.');
                    }
                });
            });
        });
    </script>
@endsection
