@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('user.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#user-list").html('');
                        console.log(data);
                        $.each(data, function (i, user) {
                            let c = '<a class="btn btn-light"' +
                            'href="/user/' + user.id + '">' +
                                '<div class="col-md-8 mx-md-auto text-md-center"><span class="h5 float-left">' +
                                user.email + '</span>-<span class="h5 float-right">' + user.vards + '  ' + user.uzvards +' </span></div>' +
                            '</a>';
                            $("#user-list").append(c);
                        })
                    }
                })
            })
        })
    </script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">{{ __('messages.All_users_list') }}</h4>
                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        <a href="{{ url('create/user') }}"
                           class="btn btn-primary float-right">{{ __('messages.Add_user') }}</a>
                    </div>
                </div>

                <div class="card-body">


                    @if(count($users) == 0)

                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_users') }}</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4" id="user-list">
                            @foreach ($users as $user)
                                <a class="btn btn-light"
                                   href="{{ url('user', $user->u_id) }}">
                                    <div class="col-md-8 mx-md-auto text-md-center"><span class="h5 float-left">{{ $user->email }} </span>-<span class="h5 float-right"> {{ $user->vards }}  {{ $user->uzvards }} </span></div>
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
