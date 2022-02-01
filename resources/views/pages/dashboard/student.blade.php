@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-white bg-primary justify-content-center">
                        <h4>Tijdlijn</h4>
                    </div>
                    <div class="card-body">
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-title text-white bg-primary justify-content-center">
                        <h4>Stagebedrijf</h4>
                    </div>
                    <div class="card-body">
                        <h6><b>Bedrijfsnaam</b></h6>
                        <p>Werken met merken B.V.</p>
                        <h6><b>Adres</b></h6>
                        <p>Waardeel 2, 8431 ND Oosterwolde</p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-title text-white bg-primary justify-content-center">
                        <h4>School</h4>
                    </div>
                    <div class="card-body">
                        <h6><b>Naam</b></h6>
                        <p>Alfa-college</p>
                        <h6><b>Adres</b></h6>
                        <p>Boumaboulevard 573, 9723 ZS Groningen</p>
                        <h6><b>Opleiding</b></h6>
                        <p>Applicatie- en mediaontwikkelaar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-title text-white bg-primary">
                        <h4>Inleveren</h4>
                    </div>
                    <div class="card-body">
                        <p>PVA inleveren op 21-02-2022</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
