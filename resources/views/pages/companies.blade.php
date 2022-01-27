@extends('layouts.default')

@section('content')
{{-- @foreach($companies as $company)

 {{$company['naam']}}

@endforeach --}}

{{-- @if(is_null($companies))
    <div class="alert alert-warning">
        <strong>Sorry!</strong> Geen bedrijven gevonden.
    </div>                                      
@else
    @foreach($companies as $company)
        {{$company['naam']}}
    @endforeach
@endif --}}

<div class="card w-75" style="height: 200px;">
<img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png" class="card-img-left" alt="..." style="width: 200px;">
  <div class="card-body">
    <h5 class="card-title">Werken met Merken</h5>
    <p class="card-text">Wij bieden een super leuke stageplek.</p>
    <a href="/bedrijven" class="btn btn-primary">Informatie over (bedrijfsnaam)</a>
  </div>
</div>
@endsection