@extends('layouts.app')
@section('content')

    <form action="{{action('RouteController@store')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <div class="col-4">

            <div class="form-group {{ $errors->has('nosaukums') ? 'has-error' : ''}}">
                <label for="nosaukums" class="control-label text-md-left">Nosaukums</label>

                <input class="form-control {{$errors->has('nosaukums') ? ' is-invalid' : '' }}" name="nosaukums" type="text" id="nosaukums">
                @if ($errors->has('nosaukums'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('nosaukums') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('apraksts') ? 'has-error' : ''}}">
                <label for="apraksts" class="control-label text-md-left">Apraksts</label>

                <input class="form-control {{$errors->has('apraksts') ? ' is-invalid' : '' }}" name="apraksts" type="text" id="apraksts">
                @if ($errors->has('apraksts'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('apraksts') }}</strong></span>
                @endif
            </div>

            <input type="hidden" id="kartasNr" name="kartasNr" value="{{ $kartasNr }}">


            @if($empty == true)
                <p class="alert alert-danger"><strong>Nedrīkst atstāt tukšas pieturas!</strong></p>
            @endif
            @if($duplicate == true)
                <p class="alert alert-danger"><strong>Pietura nedrīkst atkārtoties!</strong></p>
            @endif
            @for($i = 1; $i <= $kartasNr; $i++)

                <div class="form-group {{ $empty == true || $duplicate == true ? 'has-error' : ''}}">
                    <label for="{{ $i }}" class="control-label text-md-left">{{ $i }}. pietura</label>

                    <select name="{{ $i }}" size="1" class="form-control {{ $empty == true || $duplicate == true ? 'is-invalid' : ''}}" id="{{ $i }}">
                        <option value=""></option>
                        @foreach($stops as $stop)
                            <option value="{{ $stop->id }}">{{ $stop->nosaukums }}</option>
                        @endforeach
                    </select>
                </div>

            @endfor

            <a href="{{ action('RouteController@addStop') }}" class="btn">Pievienot pieturu</a>
            <a href="{{ action('RouteController@removeStop') }}" class="btn">Noņemt pieturu</a>

        </div>

        <input type="submit" value="Izveidot" class="btn">

    </form>

@endsection
