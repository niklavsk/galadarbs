@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Saraksts ar visiem darbiniekiem</h4>

                    @if(count($employees) == 0)

                        <h5 class="text-md-center alert alert-warning">Darbinieku nav!</h5>

                    @else
                        <div class="list-group list-group-flush">
                            @foreach ( $employees as $employee)
                                <a class="list-group-item list-group-item-action" href="{{ url('employee', $employee->id) }}">{{ $employee->vards }} {{ $employee->uzvards }}</a>
                            @endforeach
                        </div>
                    @endif
            </div>
        </div>
    </div>

@endsection
