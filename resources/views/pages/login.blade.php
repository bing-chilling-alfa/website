@extends('layouts.default')

@section('content')
    <div class="container pt-3">
        <div class="row h-100 align-items-sm-center justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Inloggen
                        </h5>
                        <form>
                            <div>
                                <label for="email">E-mailadres</label>
                                <input type="email" class="form-control" id="email" />
                            </div>
                            <div class="mt-3">
                                <label for="password">Wachtwoord</label>
                                <input type="password" class="form-control" id="password" />
                            </div>
                            <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
