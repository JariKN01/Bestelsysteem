@extends('layouts.app')
@section('content')
<form>
    <label>Afdeling van budgethouder</label>
    <select id="adfelding" name="afdeling-budgethouder">
        <option value="afdeling1">Afdeling1</option>
        <option value="afdeling2">Afdeling2</option>
        <option value="afdeling3">Afdeling3</option>
    </select>
    <label>Budgethouder</label>
    <select id="budgethouder" name="budgethouder-naam">
        <option value="budgethouder1">Budgethouder1</option>
    </select>
</form>

