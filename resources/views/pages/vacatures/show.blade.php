@extends('layouts.default')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('content')
    <div class="container py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Software developer</h5>
                    <button class="btn btn-primary bg-primary btn-m">BOL</button>
                    <div class="card-text">
                        <p>Groningen • MBO 4</p>
                        Vind jij het leuk om goede en vooral effectieve websites te bouwen? Ben jij communicatief vaardig en
                        kan je pixels aflezen als een kampioen? Vind je structuur belangrijk en zie je deadlines als een
                        uitdaging? Dan zijn wij op zoek naar jou!
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-white bg-primary">Wat ga je leren?</h2>
                        <h5>Realiseert software</h5>
                        <div class="card-text">
                            <p>Groningen • MBO 4</p>
                            B1-K1-W1 Plant werkzaamheden en bewaakt de voortgang<br>
                            <br>
                            B1-K1-W2 Ontwerpt software<br>
                            <br>
                            B1-K1-W3 Realiseert (onderdelen van) software<br>
                            <br>
                            B1-K1-W4 Test software
                        </div>
                        <div class="card-text">
                            <br>

B1-K2-W2 Presenteert het opgeleverde werk
<br>
B1-K2-W3 Reflecteert op het werk
<br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6">
                <div class="card">
                    <div class="card-body" >
                        <div id="CarrouselControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#CarouselControls" data-slide-to="0" class="active"></li>
                                <li data-target="#CarouselControls" data-slide-to="1"></li>
                                <li data-target="#CarouselControls" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="https://images.pexels.com/photos/1367269/pexels-photo-1367269.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="First slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://images.pexels.com/photos/937481/pexels-photo-937481.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="Second Slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="Third Slide">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#CarrouselControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#CarrouselControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-6">
                    <div class="card" style="width: 335px;">
                        <div class="card-body" >
                            <h5>Werkt in een ontwikkelteam</h5>
                            <div class="card-text">
                                <p>Groningen • MBO 4</p>
                                B1-K2-W2 Presenteert het opgeleverde werk<br>
                                <br>
                                B1-K2-W3 Reflecteert op het werk<br>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>



@endsection
