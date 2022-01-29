@extends('layouts.default')

@section('stylesheet')
    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
@endsection



@section('content')
    <style>
        #home {
            width: 100%;
            background: url(https://wallpaperaccess.com/full/187161.jpg);
            height: 50vh;
        }
        .home_form   {
             margin-top: 150px;
         }
        .home_form .form {
            width: calc(80% - 20px );
            margin: 0 auto;
        }

    </style>
<div class="home" id="home">
    <div class="home_form container">
        <div class="justify-content-center" id="mynavbar">
            <form class="d-flex form">
                <input class="form-control me-2" type="text" placeholder="Zoeken naar stagebedrijf...">
                <button class="btn btn-primary" type="button">Zoeken</button>
            </form>
        </div>
    </div>
</div>

@endsection
