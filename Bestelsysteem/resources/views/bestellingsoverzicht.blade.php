@use('App\Models\Bestelformulier')
<div name="bestellingsoverzicht" >
    <h1 class="text-center mb-0 fw-semibold mb-2"> Bestellingen </h1>
    <ul class="bg-white bg-gradient shadow shadow-sm border border-opacity-25 rounded list-unstyled p-2 text-center">
    @php
        $bestellingen = Bestelformulier::all();
    @endphp
    @if(Count($bestellingen) > 0)
        <li class="mx-auto col-12 col-sm-10 rounded d-flex justify-content-evenly">
            <h4 class="col-4 fw-semibold">Datum</h4>
            <h4 class="col-4 fw-semibold">Bestelling</h4>
            <h4 class="col-4 fw-semibold">Omschrijving</h4>
        </li>

        @foreach($bestellingen as $bestelling) 
        {{-- $bestellingsformulieren = All user's bestelformulieren, unless user is admin, then show all--}}
        {{-- Impossible to pass on $bestellingen --}}
            <li class="mx-auto col-12 col-sm-10 rounded bg-white border border-black shadow shadow-sm bg-gradient font-semibold d-flex justify-content-evenly mb-2">
                <p class="mt-0 mb-0 col-4">{{$bestelling->updated_at}}</p>
                <p class="mt-0 mb-0 col-4">{{$bestelling->id}}</p>
                <p class="mt-0 mb-0 col-4">{{$bestelling->korte_omschrijving}}</p>
            </li>
        @endforeach
        @else
            <h5 class="pt-2"><b>Er zijn geen bestellingen gevonden voor deze gebruiker</b></h5>
        @endif
    </ul>
</div>