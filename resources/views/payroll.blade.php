@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Saraksts ar visiem veiktajiem maksājumiem</h4>

                    @if(count($payroll) == 0)

                        <h5 class="text-md-center alert alert-warning">Veikto maksājumu nav!</h5>

                    @else
                        <div class="list-group list-group-flush">
                            @foreach ( $payroll as $pay)
                                <a class="list-group-item list-group-item-action" href="{{ url('payroll/view', $pay->id) }}">
                                    <div class="list-group list-group-horizontal justify-content-center">
                                        <div class="list-group-item list-group-item-primary col-md-3 text-md-center">{{ $pay->pers_kods }}</div>
                                        <div class="list-group-item col-md-3 text-md-center">€{{ $pay->likme * $pay->stundu_sk }}</div>
                                        <div class="list-group-item col-md-3 text-md-center">{{ $pay->izsniegsanas_datums }}</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endif
            </div>
        </div>
    </div>

@endsection
