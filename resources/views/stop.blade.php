@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ trans_choice('messages.Station', 0) }}: {{ $stop->nosaukums }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><strong>{{ __('messages.Name') }}</strong>: {{ $stop->nosaukums }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Location') }}</strong>: {{ $stop->atrasanas_vieta }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/stop', $stop->id) }}" class=" btn btn-primary">{{ __('messages.Edit_station') }}</a>
                    <a href="{{ url('destroy/stop', $stop->id) }}" class="btn btn-secondary">{{ __('messages.Delete_station') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
