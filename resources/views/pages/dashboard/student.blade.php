@extends('layouts.default')
<style>

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
