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
                <input type="date" id="start" name="trip-start" class="ms-2"/>
            </div>
            <div class="form-group">
                <label>Is er een contract?</label>
                <input class="ms-2" type="checkbox" id="contract-ja" name="ja" value="ja">
                <label class="ms-1" for="ja">Ja</label>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label>Enterprise one</label>
                </div>
                <input class="ms-2" type="checkbox" id="yourBox" onclick="toggleInputs(this.checked)" />
                <label class="ms-1" for="ja">Ja</label>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label class="col-2">Naam leverancier</label>
                </div>
            <input type="text" id="yourText1" /><br/>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label class="col-2">Adres</label>
                </div>
                <input type="text" id="yourText2" /><br/>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label class="col-2">Postcode en woonplaats</label>
                </div>
                <input type="text" id="yourText3" /><br/>
            </div>
            <div class="form-group">
                <div class="col-2">
                    <label class="col-2">KVK-nummer</label>
                </div>
                <input type="text" id="yourText4" /><br/>
            </div>

            <script>
                function toggleInputs(checked) {
                    document.getElementById('yourText1').disabled = !checked;
                    document.getElementById('yourText2').disabled = !checked;
                    document.getElementById('yourText3').disabled = !checked;
                    document.getElementById('yourText4').disabled = !checked;
                }
            </script>
            <div class="buttons">
                <button type="button" class="annuleren">Annuleren</button>
                <button type="submit" class="submit">Submit</button>
            </div>
        </form>
@endsection
