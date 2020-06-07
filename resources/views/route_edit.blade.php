@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header">Maršruta rediģēšana</h4>

                <div class="card-body">
                    <form action="{{action('RouteController@update', ['id' => $route->id])}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('nosaukums') ? 'has-error' : ''}}">
                            <label for="nosaukums" class="control-label text-md-right col-md-4">Nosaukums</label>

                            <input class="form-control col-md-6 {{$errors->has('nosaukums') ? ' is-invalid' : '' }}"
                                   name="nosaukums"
                                   type="text" id="nosaukums" value="{{ $route->nosaukums }}">
                            @if ($errors->has('nosaukums'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('nosaukums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('apraksts') ? 'has-error' : ''}}">
                            <label for="apraksts" class="control-label text-md-right col-md-4">Apraksts</label>

                            <input class="form-control col-md-6 {{$errors->has('apraksts') ? ' is-invalid' : '' }}"
                                   name="apraksts"
                                   type="text" id="apraksts" value="{{ $route->apraksts }}">
                            @if ($errors->has('apraksts'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('apraksts') }}</strong></span>
                            @endif
                        </div>

                        <input type="hidden" id="kartasNr" name="kartasNr" value="{{ $kartasNr }}">


                        @if($empty == true)
                            <div class="container-md text-md-center col-md-10">
                                <p class="alert alert-danger"><strong>Nedrīkst atstāt tukšas pieturas!</strong></p>
                            </div>
                        @endif
                        @if($duplicate == true)
                            <div class="col-md-10 container-md text-md-center">
                                <p class="alert alert-danger"><strong>Pietura nedrīkst atkārtoties!</strong></p>
                            </div>
                        @endif
                        @for($i = 1; $i <= $kartasNr; $i++)

                            <div class="form-group row {{ $empty == true || $duplicate == true ? 'has-error' : ''}}">
                                <label for="{{ $i }}" class="control-label text-md-right col-md-4">{{ $i }}.
                                    pietura</label>

                                <select name="{{ $i }}" size="1"
                                        class="form-control col-md-6 {{ $empty == true || $duplicate == true ? 'is-invalid' : ''}}"
                                        id="{{ $i }}">
                                    <option value=""></option>
                                    @foreach($stops as $stop)
                                        <option value="{{ $stop->id }}"
                                                @foreach($routeStops as $routeStop)
                                                @if($routeStop->pieturas_kartas_nr == $i && $stop->id == $routeStop->pietura) selected @endif
                                            @endforeach
                                        >{{ $stop->nosaukums }}</option>
                                    @endforeach
                                </select>
                            </div>

                        @endfor

                        <div class="container-md text-md-center">
                            <a href="{{ action('RouteController@addStop_edit', $route->id) }}" class="btn btn-primary">Pievienot
                                pieturu</a>
                            <a href="{{ action('RouteController@removeStop_edit', $route->id) }}"
                               class="btn btn-secondary">Noņemt
                                pieturu</a>
                        </div>
                        <hr/>
                        <input type="submit" value="Veikt izmaiņas"
                               class="btn btn-primary btn-block col-md-8 mx-md-auto">

                    </form>
                </div>
            </div></div></div>

@endsection
