@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Pievienot pienākšanas laikus</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('RouteController@storeTimetable', ['id' => $stops[0]->marsruta_id])}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        @if($empty == true)
                            <div class="container-md text-md-center col-md-10">
                                <p class="alert alert-danger"><strong>Nedrīkst atstāt tukšus laikus!</strong></p>
                            </div>
                        @endif

                        @if($duplicate == true)
                            <div class="col-md-10 container-md text-md-center">
                                <p class="alert alert-danger"><strong>Ievadītie laiki nedrīkst atkārtoties!</strong></p>
                            </div>
                        @endif

                        @if($wrongOrder == true)
                            <div class="col-md-10 container-md text-md-center">
                                <p class="alert alert-danger"><strong>Ievadīto laiku secība ir nepareiza!</strong></p>
                            </div>
                        @endif

                        @for($i = 0; $i < count($stops); $i++)

                            <div class="form-group row {{ $empty == true || $duplicate == true || $wrongOrder == true ? 'has-error' : ''}}">
                                <label for="{{ $i }}" class="control-label text-md-right col-md-4">{{ $stops[$i]->pietura }}</label>

                                    <input class="form-control col-md-6 {{ $empty == true || $duplicate == true || $wrongOrder == true ? 'has-error' : ''}}"
                                           name="{{ $i }}" type="time" id="{{ $i }}">
                            </div>

                        @endfor

                        <input type="submit" value="Izveidot" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
