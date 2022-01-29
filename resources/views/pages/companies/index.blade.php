@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="bedrijven align-items-sm-center">
            @foreach ($companies as $company)
                <div class="row">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png"
                                    class="img-fluid rounded-start" alt="..." style="height:200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $company['name'] }}</h5>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            {{ $company['street_name'] }} {{ $company['house_number'] }},
                                            {{ $company['zip_code'] }} {{ $company['place_name'] }}
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        Wij bieden een super leuke en leerzame stageplek. Zowel voor
                                        1e, 2e als 3e jaars applicatieontwikkelaars.
                                    </p>
                                    <a href="{{ route('companies.show', ['id' => $company['id']]) }}"
                                        class="btn btn-primary">
                                        Meer Informatie
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
