@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title bg-primary text-white">{{ $companies['name'] }}</h3>
                    <p class="card-text">
                    <h5>Wat voor bedrijf zijn wij?</h5>
                    <p>Onze webwinkel is een uitstekende plaats voor het ontwikkelen van je skills. Je komt in een team met
                        twee zeer ervaren softwareontwikkelaars. Tijdens je stage kom je leuke uiteenlopende opdrachten
                        tegen zoals werken aan de website en backoffice.</p>
                    <h5>
                        Informatie bedrijf
                    </h5>

                    {{ $companies['phone_number'] }} <br>
                    {{ $companies['email'] }} <br>
                    {{ $companies['website'] }}<br>
                    {{ $companies['street_name'] }} 
                    {{ $companies['house_number'] }}<br>
                    {{ $companies['zip_code'] }}<br>
                    {{ $companies['place_name'] }}<br>

                    </p>


                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title bg-primary text-white">Stageplekken</h3>
                    <p>
                        title : Test <br>
                        type-opleiding : 1 <br>
                        start-datum : 1-1-2021 <br>
                        eind-datum : 1-1-2021 <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
