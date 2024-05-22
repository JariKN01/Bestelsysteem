@extends('layouts.app')
@section('content')
    <div class="container col-10">
        <h1>Bestelformulier</h1>
    <form>
        <div class="form-group">
        <label>Afdeling van budgethouder</label>
        <select id="vraag1" class="form-select" aria-label="Default select example">
            <option value="afdeling1">Afdeling1</option>
            <option value="afdeling2">Afdeling2</option>
            <option value="afdeling3">Afdeling3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Budgethouder</label>
        <select id="vraag2" class="form-select" aria-label="Default select example">
            <option value="budgethouder1">Budgethouder1</option>
            <option value="budgethouder2">Budgethouder2</option>
            <option value="budgethouder3">Budgethouder3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Waar heeft de bestelling betrekking op</label>
        <select id="vraag3" class="form-select" aria-label="Default select example">
            <option value="betrekking1">Betrekking1</option>
            <option value="betrekking2">Betrekking2</option>
            <option value="betrekking3">Betrekking3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Kostenplaats</label>
        <select id="vraag4" class="form-select" aria-label="Default select example">
            <option value="kostenplaats1">Kostenplaats1</option>
            <option value="kostenplaats2">Kostenplaats2</option>
            <option value="kostenplaats3">Kostenplaats3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Categorie van kostensoort</label>
        <select id="vraag5" class="form-select" aria-label="Default select example">
            <option value="categorie1">Categorie1</option>
            <option value="categorie2">Categorie2</option>
            <option value="categorie3">Categorie3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Kostensoort</label>
        <select id="vraag6" class="form-select" aria-label="Default select example">
            <option value="kostensoort1">Kostensoort1</option>
            <option value="kostensoort2">Kostensoort2</option>
            <option value="kostensoort3">Kostensoort3</option>
        </select>
        </div>
        <div class="form-group">
        <label>Kostencode</label>
        <select id="vraag7" class="form-select" aria-label="Default select example">
            <option value="kostencode1">Kostencode1</option>
            <option value="kostencode2">Kostencode2</option>
            <option value="kostencode3">Kostencode3</option>
        </select>
        </div>
        <div class="buttons">
        <button type="button" class="annuleren">Annuleren</button>
        <button type="submit" class="submit">Submit</button>
        </div>
    </form>
    </div>
@endsection




