@extends('layouts.default')

@section('content')
<div class="container">
<div class="vacature align-items-sm-center">
@foreach($vacatures as $vacature)
  <div class="row">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png" class="img-fluid rounded-start" alt="..." style="height:200px;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">test</h3>
            <p class="card-text">test</p>
            <p class="card-text">test</p>
            <a href="/vacature/{{$vacature['id']}}" class="btn btn-primary">Informatie over</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>


@endsection
