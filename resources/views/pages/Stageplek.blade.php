@extends('layouts.default')

@section('content')
<div class="container">
<div class="stageplek align-items-sm-center">
    <div id="stageCarrousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#dataCarrousel" data-slide-to="0" class="active"></li>
            <li data-target="#dataCarrousel" data-slide-to="1" ></li>
            <li data-target="#dataCarrousel" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="la.jpg" alt="Los Angeles" style="width:100%;">
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <span class="label">Bingchilling</span>--}}
{{--        <div class="col-sm-06" style="background-color:white" >--}}
{{--            <p>testing</p>--}}
{{--        </div>--}}
    </div>
</div>
{{--    @foreach ($stageplekken as $stageplek)--}}

{{--        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
@endsection

