@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="bedrijven align-items-sm-center">
            @foreach ($companies as $company)
                <div class="row">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png"
                                    class="img-fluid rounded-start" alt="..." style="height:200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $company['name'] }}</h3>
                                    <p class="card-text">{{$company['street_name']}}</p>
                                    <p class="card-text">{{$company['house_number']}}</p>
                                    <p class="card-text">{{$company['zip_code']}}</p>
                                    <p class="card-text">{{$company['place_name']}}</p>
                                    <p class="card-text"> Wij bieden een super leuke en leerzame stageplek. Zowel voor
                                        1e, 2e als 3e jaars applicatieontwikkelaars. </p>
                                    <a href="{{ route('companies.show', ['id' => $company['id']]) }}"
                                        class="btn btn-primary">Informatie over {{ $company['name'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
