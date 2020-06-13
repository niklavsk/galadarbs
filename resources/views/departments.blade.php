@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('department.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#dep-list").html('');
                        $.each(data, function (i, department) {
                            let c = '<a class="btn btn-light text-md-left" href="/department/' +
                                department.id + '"><span class="h5">' + department.id + ' - ' + department.apraksts + '</span></a>';
                            $("#dep-list").append(c);
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
                    <h4 class="d-inline-block">{{ __('messages.All_department_list') }}</h4>
                    <div class="float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        <a href="{{ url('create/department') }}"
                          class="btn btn-primary float-right">{{ __('messages.Add_department') }}</a></div>
                </div>

                <div class="card-body">

                    @if(count($departments) == 0)
                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_departments') }}</h5>
                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4" id="dep-list">
                            @foreach ($departments as $department)
                                <a class="btn btn-light text-md-left"
                                   href="{{ url('department', $department->id) }}"><span class="h5">{{ $department->id }} - {{ $department->apraksts }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
