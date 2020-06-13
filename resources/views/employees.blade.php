@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "employee/search",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#employee-list").html('');
                        $.each(data, function (i, employee) {
                            let c = '<a class="list-group-item list-group-item-action" href="/employee/' +
                                employee.id + '"><strong>' + employee.vards + ' ' + employee.uzvards + '</strong> ' + employee.pk +'</a>';
                            $("#employee-list").append(c);
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
                    <h4 class="d-inline-block">{{ __('messages.All_employee_list') }}</h4>
                    <div class="d-inline-block float-right">
                        <div class="my-auto d-inline-block mr-3">
                            <input class="form-control" type="text" id="search"
                                   placeholder="{{ __('messages.Search') }}">
                        </div>
                        <a href="{{ url('create/employee') }}"
                           class="btn btn-primary float-right">{{ __('messages.Add_employee') }}</a></div>
                </div>

                    @if(count($employees) == 0)

                        <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_employees') }}</h5>

                    @else
                        <div class="list-group list-group-flush" id="employee-list">
                            @foreach ( $employees as $employee)
                                <a class="list-group-item list-group-item-action" href="{{ url('employee', $employee->id) }}"><strong>{{ $employee->vards }} {{ $employee->uzvards }}</strong> &nbsp; {{ $employee->pk }}</a>
                            @endforeach
                        </div>
                    @endif
            </div>
        </div>
    </div>

@endsection
