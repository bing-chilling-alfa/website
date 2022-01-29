@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="row h-100 align-items-sm-center justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Inleverpagina Leerlingen
                        </h5>
                        <p class="card-text">Hier worden de bestanden ingeleverd die gecontrolleerd moeten worden door
                            je begeleider.</p>
                        <form method="POST" action="{{ route('auth.login') }}" novalidate>
                            @csrf

                            <div>
                                <label for="name">Wat lever je in?</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Een beschrijvende naam van wat je inlevert" />
                            </div>
                            <div class="mt-3">
                                <label for="file">Bestand</label>
                                <input type="file" name="file" class="form-control" id="file" />
                            </div>
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Inleveren
                                </button>
                                <button type="reset" class="btn btn-secondary mt-2">
                                    Wissen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
