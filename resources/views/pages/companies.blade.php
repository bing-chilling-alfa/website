@extends('layouts.default')

@section('content')

<div class="bedrijven">
@foreach($companies as $company)
  <div class="row">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">{{$company['naam']}}</h3>
            <p class="card-text">{{$company['adres']}}</p>
            <p class="card-text"> Wij bieden een super leuke en leerzame stageplek. Zowel voor 1e, 2e als 3e jaars applicatieontwikkelaars. </p>
            <a href="/bedrijven" class="btn btn-primary">Informatie over {{$company['naam']}}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection