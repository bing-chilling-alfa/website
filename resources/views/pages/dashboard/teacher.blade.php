@extends('layouts.default')

@section('content')
    <div class="container py-3">
        <div class="row gy-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informatie</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat quibusdam omnis, rem
                            quidem, aperiam iste illum consectetur optio eveniet id aliquid facilis ad perferendis earum,
                            quae reprehenderit a distinctio.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Studenten</h5>
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Stagebedrijf</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ronnie Waebers</td>
                                    <td>Script</td>
                                </tr>
                                <tr>
                                    <td>Xander Perlee</td>
                                    <td>Mountain iT</td>
                                </tr>
                                <tr>
                                    <td>Nick van Loo</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
