@extends('layouts.app')
@section('content')
    <div class="container col-9">
        <h1>Bestelformulier</h1>
        <form>

            <div class="form-group">
                <div class="col-2">
                    <label>Afdeling van budgethouder</label>
                </div>
                <div class="col-10">
                    <select id="vraag1" class="form-select" aria-label="Default select example">
                        <option value="afdeling1">Afdeling1</option>
                        <option value="afdeling2">Afdeling2</option>
                        <option value="afdeling3">Afdeling3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Budgethouder</label>
                </div>
                <select id="vraag2" class="form-select" aria-label="Default select example">
                    <option value="budgethouder1">Budgethouder1</option>
                    <option value="budgethouder2">Budgethouder2</option>
                    <option value="budgethouder3">Budgethouder3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Waar heeft de bestelling betrekking op</label>
                </div>
                <select id="vraag3" class="form-select" aria-label="Default select example">
                    <option value="betrekking1">Betrekking1</option>
                    <option value="betrekking2">Betrekking2</option>
                    <option value="betrekking3">Betrekking3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Kostenplaats</label>
                </div>
                <select id="vraag4" class="form-select" aria-label="Default select example">
                    <option value="kostenplaats1">Kostenplaats1</option>
                    <option value="kostenplaats2">Kostenplaats2</option>
                    <option value="kostenplaats3">Kostenplaats3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Categorie van kostensoort</label>
                </div>
                <select id="vraag5" class="form-select" aria-label="Default select example">
                    <option value="categorie1">Categorie1</option>
                    <option value="categorie2">Categorie2</option>
                    <option value="categorie3">Categorie3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Kostensoort</label>
                </div>
                <select id="vraag6" class="form-select" aria-label="Default select example">
                    <option value="kostensoort1">Kostensoort1</option>
                    <option value="kostensoort2">Kostensoort2</option>
                    <option value="kostensoort3">Kostensoort3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Kostencode</label>
                </div>
                <select id="vraag7" class="form-select" aria-label="Default select example">
                    <option value="kostencode1">Kostencode1</option>
                    <option value="kostencode2">Kostencode2</option>
                    <option value="kostencode3">Kostencode3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Fio-route</label>
                </div>
                <select id="vraag8" class="form-select" aria-label="Default select example">
                    <option value="fio1">Fio1</option>
                    <option value="fio2">Fio2</option>
                    <option value="fio3">Fio3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label class="col-2">Bedrag</label>
                </div>
                <input type="text" class="form-control me-2" id="vraag9">
                <input type="checkbox" id="vraag10" name="ja" value="ja">
                <label class="ms-2" for="ja">Vermeld bedrag op bon</label>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Omschrijving</label>
                </div>
                <textarea class="form-control" id="vraag11" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="start">Leverdatum:</label>
                <input type="date" id="start" name="trip-start"/>
            </div>
            <div class="form-group">
                <label>Is er een contract?</label>
                <input type="checkbox" id="contrat-ja" name="ja" value="ja">
                <label class="ms-2" for="ja">Ja</label>
            </div>


            <form id="registration-form"> Enter your name: <input type="text" id="name"></form>
            <button onclick="disable()">Disable the text field</button>
            <button onclick="enable()">Enable the text field</button>
            <script> function disable() {
                    document.getElementById("name").disabled = true;
                }

                function enable() {
                    document.getElementById("name").disabled = false;
                } </script>




            <div class="form-group">

                <label for="enterpriseSelect">Enterprise one:</label>
                <select id="enterpriseSelect" name="enterpriseSelect">
                    <option value="yes">Ja</option>
                    <option value="no">Nee</option>
                </select>
            </div>
            <div class="form-group" id="enterpriseAdress">
                <label for="enterprise">Enterprise adresnummer:</label>
                <div id="addressNumberField" class="show">
                    <input type="text" id="addressNumber" name="addressNumber">
                </div>
            </div>
            <div></div>
            <div id="leverancierField" class="hidden form-group">
                <div>
                    <div class="col-2">
                        <label for="nameLeverancier">Naam Leverancier</label>
                    </div>
                    {{--            <div class="col-10">--}}
                    <input type="text" id="nameLeverancier" name="nameLeverancier">
                    {{--            </div>--}}
                </div>
                <div class="col-2">
                    <label for="adres">Adres</label>
                </div>
                <div class="col-10">
                    <input type="text" id="address" name="address">
                </div>
                <div class="col-2">
                    <label for="postcode">Postcode en woonplaats</label>
                </div>
                <input type="text" id="postcode" name="postcode">
                <div class="col-2">
                    <label>KVK-nummer (indien bekend)</label>
                </div>
                <input type="text" id="kvk" name="kvk">
            </div>
            <div class="buttons">
                <button type="button" class="annuleren">Annuleren</button>
                <button type="submit" class="submit">Submit</button>
            </div>


        </form>
@endsection




