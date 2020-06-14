@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Depot') }}: {{ $depot->depot_id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if($depot->depo_vaditajs != "")
                            <a class="list-group-item list-group-item-primary list-group-item-action"
                                   href="{{ url('employee', $depot->depo_vaditajs) }}">
                                    <strong>{{ __('messages.Depot_director') }}</strong>: {{ $depot->vards }} {{ $depot->uzvards }}</a>
                        @else <li class="list-group-item list-group-item-primary"><strong>{{ __('messages.Depot_director') }}</strong>:</li>
                        @endif
                        <li class="list-group-item"><strong>{{ __('messages.Description') }}</strong>: {{ $depot->apraksts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Location') }}</strong>:
                            @if($address->iela != "" && $address-> majas_nr != ""){{ $address->iela }} {{ $address-> majas_nr }}, @endif
                            @if($address->majas_nosaukums != ""){{ $address->majas_nosaukums }}, @endif
                            @if($address->pilseta != ""){{ $address->pilseta }}, @endif
                            @if($address->novads != ""){{ $address->novads }}, @endif
                            @if($address->pagasts != ""){{ $address->pagasts }}, @endif
                            {{ $address->valsts }},
                            {{ $address->pasta_indekss }}
                        </li>
                        <li class="list-group-item"><strong>{{ __('messages.Email') }}</strong>: {{ $depot->depo_epasts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Telephone_number') }}</strong>: {{ $depot->kontakttalrunis }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    @if(Auth::user()->role == 1)
                        <a href="{{ url('edit/depot', $depot->depot_id) }}" class=" btn btn-primary">{{ __('messages.Edit_depot') }}</a>
                        <a href="{{ url('destroy/depot', $depot->depot_id) }}" class="btn btn-secondary">{{ __('messages.Delete_depot') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
