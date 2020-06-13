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
                        <li class="list-group-item"><strong>{{ __('messages.Location') }}</strong>:
                            @if($address->iela != "" && $address-> majas_nr != ""){{ $address->iela }} {{ $address-> majas_nr }}, @endif
                            @if($address->majas_nosaukums != ""){{ $address->majas_nosaukums }}, @endif
                            @if($address->pilseta != ""){{ $address->pilseta }}, @endif
                            @if($address->novads != ""){{ $address->novads }}, @endif
                            @if($address->pagasts != ""){{ $address->pagasts }}, @endif
                            {{ $address->valsts }},
                            {{ $address->pasta_indekss }}
                        </li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    @if(Auth::user()->role == 1)
                        <a href="{{ url('edit/stop', $stop->id) }}" class="btn btn-primary">{{ __('messages.Edit_station') }}</a>
                        <a href="{{ url('destroy/stop', $stop->id) }}" class="btn btn-secondary">{{ __('messages.Delete_station') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
