@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Depot') }}: {{ $depot->id }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @if($depot->depo_vaditajs != "")
                            <a class="list-group-item list-group-item-primary list-group-item-action text-uppercase"
                                   href="{{ url('employee', $depot->depo_vaditajs) }}">
                                    <strong>{{ __('messages.Depot_director') }}</strong>: {{ $depot->depo_vaditajs }}</a>
                        @else <li class="list-group-item list-group-item-primary"><strong>{{ __('messages.Depot_director') }}</strong>:</li>
                        @endif
                        <li class="list-group-item"><strong>{{ __('messages.Description') }}</strong>: {{ $depot->apraksts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Location') }}</strong>: {{ $depot->atrasanas_vieta }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Email') }}</strong>: {{ $depot->epasts }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Telephone_number') }}</strong>: {{ $depot->kontakttalrunis }}</li>
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/depot', $depot->id) }}" class=" btn btn-primary">{{ __('messages.Edit_depot') }}</a>
                    <a href="{{ url('destroy/depot', $depot->id) }}" class="btn btn-secondary">{{ __('messages.Delete_depot') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
