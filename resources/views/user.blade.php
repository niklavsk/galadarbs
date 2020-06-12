@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.User') }}: {{ $user->email }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><strong>{{ __('messages.First_name') }}</strong>: {{ $user->vards }}</li>
                        <li class="list-group-item"><strong>{{ __('messages.Last_name') }}</strong>: {{ $user->uzvards }}</li>
                        @if($user->role == 0)
                            <li class="list-group-item"><strong>{{ __('messages.Role') }}</strong>: {{ __('messages.Ordinary_user') }}</li>
                        @elseif($user->role == 1)
                            <li class="list-group-item"><strong>{{ __('messages.Role') }}</strong>: {{ __('messages.Admin') }}</li>
                        @elseif($user->role == 2)
                            <li class="list-group-item"><strong>{{ __('messages.Role') }}</strong>: {{ __('messages.Depot_director') }}</li>
                        @elseif($user->role == 3)
                            <li class="list-group-item"><strong>{{ __('messages.Role') }}</strong>: {{ __('messages.Department_director') }}</li>
                        @elseif($user->role == 4)
                            <li class="list-group-item"><strong>{{ __('messages.Role') }}</strong>: {{ __('messages.Accountant') }}</li>
                        @endif
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/user', $user->u_id) }}" class=" btn btn-primary">{{ __('messages.Edit_user') }}</a>
                    <a href="{{ url('destroy/user', $user->u_id) }}" class="btn btn-secondary">{{ __('messages.Delete_user') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
