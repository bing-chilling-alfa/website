@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="row h-100 align-items-sm-center justify-content-center">
            <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Inloggen
                        </h5>
                        <form method="POST" action="{{ route('login') }}" novalidate>
                            @csrf

                            <div>
                                <label for="email">E-mailadres</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" value="{{ old('email') }}" />
                                @error('email')
                                    <small class="invalid-feedback d-block">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="password">Wachtwoord</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password" />
                                @error('password')
                                    <small class="invalid-feedback d-block">
                                        {{ $message }}
                                    </small>
                                @enderror
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
