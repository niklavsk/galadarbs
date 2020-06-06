@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Saraksts ar visiem depo</h4>
                    <a href="{{ url('create/depot') }}" class="btn btn-primary float-right">Pievienot depo</a>
                </div>

                <div class="card-body">


                    @if(count($depots) == 0)

                        <h5 class="text-md-center alert alert-warning">Depo nav!</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4">
                            @foreach ($depots as $depot)
                                <a class="btn btn-light"
                                       href="{{ url('depot', $depot->id) }}"><span class="h5">{{ $depot->id }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection




