@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Maksājums</h4>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th>Personas kods</th>
                            <th>Adrese</th>
                            <th>Tālrunis</th>
                            <th>Epasts</th>
                        </tr>
                        <tr>
                            <td>{{$employee->pk}}</td>
                            <td>{{$employee->adrese}}</td>
                            <td>{{$employee->talrunis}}</td>
                            <td>{{$employee->epasts}}</td>
                        </tr>
                    </table>
                    <hr/>
                    <table class="table">
                        <tr>
                            <th>Amats</th>
                            <th>Likme</th>
                            <th>Stundu skaits</th>
                            <th>Izsniegšanas datums</th>
                        </tr>
                        <tr>
                            <td>{{$pay->amats}}</td>
                            <td>€{{$pay->likme}}</td>
                            <td>{{$pay->stundu_sk}} st.</td>
                            <td>{{$pay->izsniegsanas_datums}}</td>
                        </tr>
                    </table>
                </div>
            </div></div></div>

@endsection

