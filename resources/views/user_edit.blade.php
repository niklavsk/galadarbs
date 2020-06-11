@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Pievienot lietotāju</h4>
                </div>
                <div class="card-body">
                    <form action="{{action('UserController@update', ['id' => $user->id])}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group row {{ $errors->has('darbinieks') ? 'has-error' : ''}}">
                            <label for="darbinieks" class="control-label text-md-right col-md-4">Darbinieks</label>

                            <select name="darbinieks" size="1"
                                    class="form-control col-md-6 {{$errors->has('darbinieks') ? ' is-invalid' : '' }}"
                                    id="darbinieks" disabled>

                                    <option value="{{ $employee->id }}">{{ $employee->vards }} {{ $employee->uzvards }}</option>

                            </select>

                            @if ($errors->has('darbinieks'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('darbinieks') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="control-label text-md-right col-md-4">E-pasts</label>

                            <input class="form-control col-md-6 {{$errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" type="email" id="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('password') ? 'has-error' : ''}}">
                            <label for="password" class="control-label text-md-right col-md-4">Parole</label>

                            <input class="form-control col-md-6 {{$errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" type="password" id="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group row {{ $errors->has('role') ? 'has-error' : ''}}">
                            <label for="role" class="control-label text-md-right col-md-4">Loma</label>

                            <select name="role" size="1"
                                    class="form-control col-md-6 {{$errors->has('role') ? ' is-invalid' : '' }}"
                                    id="role">
                                <option value=""></option>
                                @foreach($roles as $role => $value)
                                    <option value="{{ $role }}"
                                            @if($role == $user->role) selected @endif>
                                        {{ $value }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('role'))
                                <span class="invalid-feedback text-md-center"><strong>{{ $errors->first('role') }}</strong></span>
                            @endif
                        </div>

                        <input type="submit" value="Izveidot" class="btn btn-primary btn-block mx-md-auto col-md-8">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
