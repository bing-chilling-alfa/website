@extends('layouts.default')

@section('content')
<div class="container py-3">
        <div class="row h-10 align-items-sm-center justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-10 col-xl-14">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                            Inleverpagina Leerlingen
                        </h3>
                        <p>Hier worden de bestanden ingeleverd die gecontrolleerd moeten worden door je begeleider.</p>
                        <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Wat lever je in?
    <br />
    <input type="text" name="title" />
    <br /><br />
    Bestand:
    <br />
    <input type="file" name="Bestand" />
    <br /><br />
    <input type="submit" value=" Opslaan " />
    <input type="reset" value="Verwijderen">
</form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

