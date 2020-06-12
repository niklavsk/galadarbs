@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_employee_list') }}</h4>
                    <a href="{{ url('create/employee') }}" class="btn btn-primary float-right">{{ __('messages.Add_employee') }}</a>
                </div>

                    @if(count($employees) == 0)

                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_employees') }}</h5>

                    @else
                        <div class="list-group list-group-flush">
                            @foreach ( $employees as $employee)
                                <a class="list-group-item list-group-item-action" href="{{ url('employee', $employee->id) }}"><strong>{{ $employee->vards }} {{ $employee->uzvards }}</strong> &nbsp; {{ $employee->pk }}</a>
                            @endforeach
                        </div>
                    @endif
            </div>
        </div>
    </div>

@endsection
