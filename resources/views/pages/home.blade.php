@extends('layouts.default')

@section('stylesheet')
    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
@endsection



@section('content')
{{--    <div class="home_page">--}}
        <div class="container">
            <div class="justify-content-center" id="mynavbar">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Zoeken naar stagebedrijf...">
                    <button class="btn btn-primary" type="button">Zoeken</button>
                </form>
            </div>
        </div>
{{--    </div>--}}
{{--    <img class="flex overflow-hidden w-100 h-50" src="https://wallpaperaccess.com/full/187161.jpg" alt="https://wallpaperaccess.com/full/187161.jpg">--}}
@endsection
