@extends('layouts.app')
@section('content')
    <div class="container col-9 p-3 bg-primary bg-opacity-25 rounded">
        <h1>Bestelformulier</h1>
        <form action="{{route('bestelformulier/opslaan')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Afdeling van budgethouder</label>
                </div>
                <div class="col-5">
                    <select name="afdeling_naam" id="afdeling_naam" class="form-select" aria-label="Default select example">
                        @foreach($afdelingen as $afdeling)
                            <option value="{{$afdeling->id}}">{{$afdeling->naam}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Budgethouder</label>
                </div>
                <div class="col-5">
                    <select name="budgethouder_naam" id="budgethouder_naam" class="form-select" aria-label="Default select example">
                    @foreach($budgethouders as $budgethouder)
                        {{-- GAORG_langNr = placeholder! should be ga_orgs.naam --}}
                        <option value="{{$budgethouder->id}}">{{$budgethouder->GOARG_langNr}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label class="w-auto">Waar heeft de bestelling betrekking op?</label>
                </div>
                <div class="col-5">
                    <select name="kostenplaats_type" id="kostenplaats_type" class="form-select" aria-label="Default select example">
                        @foreach($kostenplaatstypes as $kostenplaatstype)
                            <option value="{{$kostenplaatstype->id}}">{{$kostenplaatstype->omschrijving}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostenplaats</label>
                </div>
                <div class="col-5">
                    <select name="kostenplaats_naam" id="kostenplaats_naam" class="form-select" aria-label="Default select example">
                        {{-- <option value="kostenplaats1">
                            value="$kostenplaats->id"
                            $kostenplaats->id .'-'. $kostenplaats->naam
                            Kostenplaats1
                        </option> --}}
                        @foreach($kostenplaatsen as $kostenplaats)
                            <option value="{{$kostenplaats->id}}">{{$kostenplaats->beschrijving}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Categorie van kostensoort</label>
                </div>
                <div class="col-5">
                    <select name="categorie_naam" id="categorie_naam" class="form-select" aria-label="Default select example">
                        {{-- foreach()
                        <option value="categorie1">
                            Categorie1
                            economische_categorie
                        </option> --}}
                        @foreach($categorieen as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->beschrijving}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostensoort<br><small>(Hoofdrekeningnummer)</small></label>
                </div>
                <div class="col-5">
                    <select name="kostensoort" id="kostensoort" class="form-select" aria-label="Default select example">
                        @foreach($kostensoorten as $kostensoort)
                            <option value="{{$kostensoort->id}}">{{$kostensoort->beschrijving}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Kostencode<br><small>(Subrekeningnummer)</small></label>
                </div>
                <div class="col-5">
                    <select name="kostencode" id="kostencode" class="form-select" aria-label="Default select example">
                        <option value="kostencode1">Kostencode1</option>
                        <option value="kostencode2">Kostencode2</option>
                        <option value="kostencode3">Kostencode3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Fio-route</label>
                </div>
                <div class="col-5">
                    <select name="fio_route" id="fio_route" class="form-select" aria-label="Default select example">
                        <option value="fio1">Fio1</option>
                        <option value="fio2">Fio2</option>
                        <option value="fio3">Fio3</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Bedrag</label>
                </div>
                <div class="col-5 d-flex">
                    <input type="text" class="form-control w-50" name="bedrag" id="bedrag" pattern="^\d+(,\d{1,2})?">
                    <input type="checkbox" class="ms-2 me-1" name="bedrag_bestelbon" id="bedrag_bestelbon" value="1">
                    <label class="pt-2" for="bedrag_bestelbon">Vermelden op bestelbon?</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Omschrijving</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="korte_omschrijving" id="korte_omschrijving"></input>
                </div>
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label for="start">Leverdatum</label>
                </div>
                <input type="date" id="leverdatum" name="leverdatum" value="">
            </div>

            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Is er een contract?</label>
                </div>
                <input class="" type="checkbox" id="enterprise_contract" name="enterprise_contract" value="1">
                <label class="ms-2" for="enterprise_contract">Ja</label>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Bestaat in EnterpriseOne?</label>
                </div>
                <input type="checkbox" name="enterprise_one_exists"  id="enterprise_one_exists" checked onclick="toggleInputs(this.checked)"/>
                <label class="ms-2" for="enterprise_one_exists">Ja</label>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>EnterpriseOne Nummer</label>
                </div>
                <input type="text" name="enterprise_one_nummer" id="enterprise_one_nummer">
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Naam leverancier</label>
                </div>
                <input type="text" name="naam_leverancier" id="naam_leverancier" disabled/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Adres</label>
                </div>
                <input type="text" name="adres_leverancier" id="adres_leverancier" disabled/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Postcode</label>
                </div>
                <input type="text" name="postcode_leverancier" id="postcode_leverancier" disabled/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>Woonplaats</label>
                </div>
                <input type="text" name="plaats_leverancier" id="plaats_leverancier" disabled/>
            </div>
            <div class="form-group">
                <div class="col-5 text-end">
                    <label>KVK-nummer</label>
                </div>
                <input type="text" name="kvk_nummer" id="kvk_nummer" disabled/>
            </div>
            <input type="hidden" name="user_id" value=1>
            <script>
                function toggleInputs(checked) {
                    document.getElementById('enterprise_one_nummer').disabled = !checked;
                    document.getElementById('naam_leverancier').disabled = checked;
                    document.getElementById('adres_leverancier').disabled = checked;
                    document.getElementById('postcode_leverancier').disabled = checked;
                    document.getElementById('plaats_leverancier').disabled = checked;
                    document.getElementById('kvk_nummer').disabled = checked;
                }
            </script>

            <div class="buttons my-2 mx-auto col-4">
                <button type="button" class="rounded bg-white bg-opacity-100 col-4 border border-primary border-opacity-50 bg-gradient shadow-sm me-3 text-center p-2"><b>Annuleren</b></button>
                <button type="submit" class="text-white rounded bg-primary bg-opacity-75 col-4 border border-primary border-opacity-50 bg-gradient shadow-sm text-center p-2"><b>Accepteren</b></button>
            </div>
        </form>
@endsection

