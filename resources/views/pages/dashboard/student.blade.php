@extends('layouts.default')
<style>
.timeline {
    border-left: 3px solid #727cf5;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    background: rgba(114, 124, 245, 0.09);
    margin: 0 auto;
    letter-spacing: 0.2px;
    position: relative;
    line-height: 1.4em;
    font-size: 1.03em;
    padding: 50px;
    list-style: none;
    text-align: left;
    max-width: 70%;
}

@media (max-width: 767px) {
    .timeline {
        max-width: 98%;
        padding: 25px;
    }
}

.timeline h1 {
    font-weight: 300;
    font-size: 1.4em;
}

.timeline h2,
.timeline h3 {
    font-weight: 600;
    font-size: 1rem;
    margin-bottom: 10px;
}

.timeline .event {
    border-bottom: 1px dashed #e8ebf1;
    padding-bottom: 25px;
    margin-bottom: 25px;
    position: relative;
}

@media (max-width: 767px) {
    .timeline .event {
        padding-top: 30px;
    }
}

.timeline .event:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0;
    border: none;
}

.timeline .event:before,
.timeline .event:after {
    position: absolute;
    display: block;
    top: 0;
}

.timeline .event:before {
    left: -207px;
    content: attr(data-date);
    text-align: right;
    font-weight: 100;
    font-size: 0.9em;
    min-width: 140px;
}

@media (max-width: 767px) {
    .timeline .event:before {
        left: 0px;
        text-align: left;
    }
}

.timeline .event:after {
    -webkit-box-shadow: 0 0 0 3px #727cf5;
    box-shadow: 0 0 0 3px #727cf5;
    left: -55.8px;
    background: #fff;
    border-radius: 50%;
    height: 9px;
    width: 9px;
    content: "";
    top: 5px;
}

@media (max-width: 767px) {
    .timeline .event:after {
        left: -31.8px;
    }
}

.rtl .timeline {
    border-left: 0;
    text-align: right;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    border-right: 3px solid #727cf5;
}

.rtl .timeline .event::before {
    left: 0;
    right: -170px;
}

.rtl .timeline .event::after {
    left: 0;
    right: -55.8px;
}
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                 <h4 class="card-title text-white bg-primary justify-content-center">Tijdlijn</h4>
                    <div id="content">
                        <ul class="timeline">
                            <li class="event" data-date="">
                                <h3>Aangenomen</h3>
                                <p>Aangenomen voor stage bij Werken met merken.</p>
                                <footer>10 jan 2022</footer>
                            </li>
                            <li class="event" data-date="">
                                <h3>Start stageperiode</h3>
                                <p>Start stageperiode.</p>
                                <footer>14 feb 2022</footer>
                            </li>
                            <li class="event" data-date="">
                                <h3>Einde stageperiode</h3>
                                <p>Einde stageperiode.</p>
                                <footer>8 jul 2022</footer>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
