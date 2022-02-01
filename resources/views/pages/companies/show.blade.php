@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title bg-primary text-white">{{ $companies['naam'] }}</h3>
                    <p class="card-text">
                    <h5>Wat voor bedrijf zijn wij?</h5>
                    <p>Onze webwinkel is een uitstekende plaats voor het ontwikkelen van je skills. Je komt in een team met twee zeer ervaren softwareontwikkelaars. Tijdens je stage kom je leuke uiteenlopende opdrachten tegen zoals werken aan de website en backoffice.</p>
                    <h5>
                        Informatie bedrijf
                    </h5>
                   
                        {{ $companies['telefoonnummer'] }} <br>
                        {{ $companies['email'] }} <br>
                        {{ $companies['website'] }}<br>
                        {{ $companies['adres'] }}<br>
                        {{ $companies['postcode'] }}<br>
                   
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection
