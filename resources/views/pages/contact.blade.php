@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="row h-100 align-items-sm-center justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Contact Opnemen
                        </h5>
                        <form>
                            <div>
                                <label for="firstName">Voornaam</label>
                                <input required type="text" class="form-control" id="firstName" />
                            </div>
                            <div class="mt-3">
                                <label for="lastName">Achternaam</label>
                                <input required type="text" class="form-control" id="lastName" />
                            </div>
                            <div class="mt-3">
                                <label for="email">E-mailadres</label>
                                <input required type="email" class="form-control" id="email" />
                            </div>
                            <div class="mt-3">
                                <label for="subject">Onderwerp</label>
                                <input required type="text" class="form-control" id="subject" />
                            </div>
                            <div class="mt-3">
                                <label for="message">Bericht</label>
                                <textarea required type="text" class="form-control" id="message"></textarea>
                            </div>
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Versturen
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
