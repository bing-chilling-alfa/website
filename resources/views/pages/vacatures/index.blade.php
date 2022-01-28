@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="vacature align-items-sm-center">
            @foreach ($vacatures as $vacature)
                <div class="row">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="https://s3-eu-west-1.amazonaws.com/tpd/logos/503ebec200006400051a4763/0x0.png"
                                    class="img-fluid rounded-start" alt="..." style="height:200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $vacature['title'] }}</h3>
                                    <p class="card-text"><b>Start datum:</b> {{ $vacature['start-datum'] }} </p>
                                    <p class="card-text"><b>Eind datum:</b> {{ $vacature['eind-datum'] }}</p>
                                    <p class="card-text"><b>Type opleiding:</b> {{ $vacature['type-opleiding'] }}</p>
                                    {{-- <a href="/vacature/{{$vacature['id']}}" class="btn btn-primary">Informatie over vacature bij {{$vacature['title']}}</a> --}}
                                    <a href="{{ route('vacatures.show', ['id' => $vacature['id']]) }}"
                                        class="btn btn-primary">Ga naar de vacature</a>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <b>Geplaatst op:</b> {{ $vacature['created_at'] }} &emsp; <b>Bijgewerkt op:</b>
                                {{ $vacature['updated_at'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
