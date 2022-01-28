@extends('layouts.default')

{{--@section('content') TODO change stageplek->vacature--}}

<div class="container">
{{--<div class="stageplek align-items-sm-center">--}}
    <div id="stageCarrousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#dataCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#dataCarousel" data-slide-to="1" ></li>
            <li data-target="#dataCarousel" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="la.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
                <img src="chicago.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="people.jpg" alt="Bedrijf" style="width:100%;">
            </div>
        </div>

        <a class="left carousel-control" href="#dataCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chrevron-left"></span>
            <span class="sr-only">Vorige</span>
        </a>
        <a class="right carousel-control" href="#dataCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chrevron-right"></span>
            <span class="sr-only">Volgende</span>
        </a>
    </div>
</div>
{{--    <div class="row">--}}
{{--        <span class="label">Bingchilling</span>--}}
{{--        <div class="col-sm-06" style="background-color:white" >--}}
{{--            <p>testing</p>--}}
{{--        </div>--}}

{{--    @foreach ($stageplekken as $stageplek)--}}

{{--        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
@endsection

