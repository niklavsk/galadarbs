@extends('layouts.app')
@section('content')

    <form action="{{action('DepotController@store')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

        <div class="col-2">

            <div class="form-group {{ $errors->has('apraksts') ? 'has-error' : ''}}">
                <label for="apraksts" class="control-label text-md-left">Apraksts</label>

                <input class="form-control {{$errors->has('apraksts') ? ' is-invalid' : '' }}" name="apraksts" type="text" id="apraksts">
                @if ($errors->has('apraksts'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('apraksts') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('epasts') ? 'has-error' : ''}}">
                <label for="epasts" class="control-label text-md-left">E-pasts</label>

                <input class="form-control {{$errors->has('epasts') ? ' is-invalid' : '' }}" name="epasts" type="text" id="epasts">
                @if ($errors->has('epasts'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('epasts') }}</strong></span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('kontakttalrunis') ? 'has-error' : ''}}">
                <label for="kontakttalrunis" class="control-label text-md-left">Kontakttālrunis</label>

                <input class="form-control {{$errors->has('kontakttalrunis') ? ' is-invalid' : '' }}" name="kontakttalrunis" type="text" id="kontakttalrunis">
                @if ($errors->has('kontakttalrunis'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('kontakttalrunis') }}</strong></span>
                @endif
            </div>


            <div class="form-group {{ $errors->has('depo_vaditajs') ? 'has-error' : ''}}">
                <label for="depo_vaditajs" class="control-label text-md-left">Depo vadītājs</label>

                <select name="depo_vaditajs" size="1" class="form-control {{$errors->has('depo_vaditajs') ? ' is-invalid' : '' }}" id="depo_vaditajs">
                    <option value=""></option>
                    @foreach($directors as $director)
                        <option value="{{ $director->director_id }}">{{ $director->vards }} {{ $director->uzvards }}</option>
                    @endforeach
                </select>

                @if ($errors->has('depo_vaditajs'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('depo_vaditajs') }}</strong></span>
                @endif
            </div>



            <div class="form-group {{ $errors->has('atrasanas_vieta') ? 'has-error' : ''}}">
                <label for="atrasanas_vieta" class="control-label text-md-left">Atrašanās vieta</label>

                <select name="atrasanas_vieta" size="1" class="form-control {{$errors->has('atrasanas_vieta') ? ' is-invalid' : '' }}" id="atrasanas_vieta">
                    <option value=""></option>
                    @foreach($addresses as $address)
                        <option value="{{ $address->id }}">

                            {{ $address->iela }} {{ $address-> majas_nr }},
                            @if($address->pilseta != ""){{ $address->pilseta }}, @endif
                            @if($address->novads != ""){{ $address->novads }}, @endif
                            @if($address->pagasts != ""){{ $address->pagasts }}, @endif
                            {{ $address->pasta_indekss }}

                        </option>
                    @endforeach
                </select>

                @if ($errors->has('atrasanas_vieta'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('atrasanas_vieta') }}</strong></span>
                @endif
            </div>
        </div>

        <input type="submit" value="Izveidot" class="btn">

    </form>

@endsection

