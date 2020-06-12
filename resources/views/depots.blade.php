@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_depot_list') }}</h4>
                    <a href="{{ url('create/depot') }}" class="btn btn-primary float-right">{{ __('messages.Add_depot') }}</a>
                </div>

                <div class="card-body">

                    @if(count($depots) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_depot') }}</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-10 h4">
                            @foreach ($depots as $depot)
                                <a class="btn btn-light text-md-left"
                                       href="{{ url('depot', $depot->id) }}"><span class="h5">{{ $depot->id }} - {{ $depot->apraksts }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
