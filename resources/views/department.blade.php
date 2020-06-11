@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Department') }}: {{ $department->id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if($department->nodalas_vaditajs != "")
                            <a class="list-group-item list-group-item-primary list-group-item-action text-uppercase"
                               href="{{ url('employee', $department->nodalas_vaditajs) }}">
                                <strong>{{ __('messages.Department_director') }}</strong>: {{ $department->nodalas_vaditajs }}</a>
                        @else <li class="list-group-item list-group-item-primary"><strong>{{ __('messages.Department_director') }}</strong>:</li>
                        @endif
                        <li class="list-group-item"><strong>{{ __('messages.Description') }}</strong>: {{ $department->apraksts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Location') }}</strong>: {{ $department->atrasanas_vieta }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Email') }}</strong>: {{ $department->epasts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Telephone_number') }}</strong>: {{ $department->kontakttalrunis }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/department', $department->id) }}" class=" btn btn-primary">{{ __('messages.Edit_department') }}</a>
                    <a href="{{ url('destroy/department', $department->id) }}" class="btn btn-secondary">{{ __('messages.Delete_department') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
