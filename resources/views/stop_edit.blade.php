@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.Edit_station') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('StopController@update', $stop->id)}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('nosaukums') ? 'has-error' : ''}}">
                            <label for="nosaukums" class="control-label text-md-right col-md-4">{{ __('messages.Name') }}</label>

                            <input class="form-control col-md-6 {{$errors->has('nosaukums') ? ' is-invalid' : '' }}"
                                   name="nosaukums" type="text" id="nosaukums" value="{{ $stop->nosaukums }}">
                            @if ($errors->has('nosaukums'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('nosaukums') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('atrasanas_vieta') ? 'has-error' : ''}}">
                            <label for="atrasanas_vieta" class="control-label text-md-right col-md-4">{{ __('messages.Location') }}</label>

                            <select name="atrasanas_vieta" size="1"
                                    class="form-control col-md-6 {{$errors->has('atrasanas_vieta') ? ' is-invalid' : '' }}"
                                    id="atrasanas_vieta">
                                <option value=""></option>
                                @foreach($addresses as $address)
                                    <option value="{{ $address->id }}"
                                            @if($stop->atrasanas_vieta == $address->id) selected @endif>

                                        {{ $address->iela }} {{ $address-> majas_nr }},
                                        @if($address->pilseta != ""){{ $address->pilseta }}, @endif
                                        @if($address->novads != ""){{ $address->novads }}, @endif
                                        @if($address->pagasts != ""){{ $address->pagasts }}, @endif
                                        {{ $address->pasta_indekss }}

                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('atrasanas_vieta'))
                                <span
                                    class="invalid-feedback text-md-center"><strong>{{ $errors->first('atrasanas_vieta') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="{{ __('messages.Create') }}" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
