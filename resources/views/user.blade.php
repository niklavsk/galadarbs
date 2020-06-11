@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Lietotājs: {{ $user->epasts }}</h4>
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Vārds</strong>: {{ $user->vards }}</li>
                        <li class="list-group-item"><strong>Uzvārds</strong>: {{ $user->uzvards }}</li>
                        @if($user->role == 0)
                            <li class="list-group-item"><strong>Loma</strong>: Parastais lietotājs</li>
                        @elseif($user->role == 1)
                            <li class="list-group-item"><strong>Loma</strong>: Administrators</li>
                        @elseif($user->role == 2)
                            <li class="list-group-item"><strong>Loma</strong>: Depo vadītājs</li>
                        @elseif($user->role == 3)
                            <li class="list-group-item"><strong>Loma</strong>: Nodaļas vadītājs</li>
                        @elseif($user->role == 4)
                            <li class="list-group-item"><strong>Loma</strong>: Grāmatvedis</li>
                        @endif
                    </ul>

                </div>
                <div class="card-footer text-center p-md-3">
                    <a href="{{ url('edit/user', $user->id) }}" class=" btn btn-primary">Rediģēt lietotāju</a>
                    <a href="{{ url('destroy/user', $user->id) }}" class="btn btn-secondary">Izdzēst lietotāju</a>
                </div>
            </div>
        </div>
    </div>
@endsection
