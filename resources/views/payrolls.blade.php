@extends('layouts.app')
@section('content')

    <script type="text/javascript">
        $(document).ready(function () {
            $("#search").keyup(function () {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('payroll.search') }}",
                    data: {
                        _token: CSRF_TOKEN,
                        search: $("#search").val()
                    },
                    success: function (data) {
                        $("#payroll-list").html('');
                        $.each(data, function (i, payroll) {
                            let date = new Date(payroll.izsniegsanas_datums);
                            let c = '<a class="list-group-item list-group-item-action" href="/payroll/' + payroll.pay_id + '">\n' +
                                '    <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">' + payroll.pay_id + '</span></h5>\n' +
                                '    <strong>' + payroll.vards + ' ' + payroll.uzvards + ' &#160; ' +  payroll.pk + '   </strong>\n &#160; ' +
                                @if ( App::getLocale() == 'lv')
                                '        Summa: &euro;' + new Intl.NumberFormat('lv-LV').format(payroll.likme * payroll.stundu_sk) + '\n' +
                                @elseif ( App::getLocale() == 'en')
                                    '        Summa: &euro;' + new Intl.NumberFormat('en-US').format(payroll.likme * payroll.stundu_sk) + '\n' +
                                @endif
                                @if ( App::getLocale() == 'lv')
                                '        '+ date.getDay() + '.' + date.getMonth() + '.' + date.getFullYear() +'\n' +
                                @elseif ( App::getLocale() == 'en')
                                '        '+ date.getMonth() +'/' + date.getDay() + '/' + date.getFullYear() +'\n' +
                                @endif
                                '</a>'
                            $("#payroll-list").append(c);
                        });
                    }
                })
            })
        })
    </script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="d-inline-block">{{ __('messages.All_processed_payments_list') }}</h4>

                        <div class="float-right">
                            <div class="my-auto d-inline-block mr-3">
                                <input class="form-control" type="text" id="search"
                                       placeholder="{{ __('messages.Search') }}">
                            </div>
                            @if(Auth::user()->role == 4 || Auth::user()->role == 1)
                              <a href="{{ url('create/payroll') }}" class="btn btn-primary float-right">{{ __('messages.Add_payment') }}</a>
                            @endif
                        </div>

                </div>

                @if(count($payrolls) == 0)

                    <h5 class="text-md-center alert alert-warning">{{ __('alerts.No_processed_payments') }}</h5>

                @else
                    <div class="list-group list-group-flush" id="payroll-list">
                        @foreach ( $payrolls as $payroll)
                            <a class="list-group-item list-group-item-action" href="{{ url('payroll', $payroll->pay_id) }}">
                                <h5 class="d-inline-block mr-1"><span class="badge badge-pill badge-light">{{ $payroll->pay_id }}</span></h5>
                                <strong>{{ $payroll->vards }} {{ $payroll->uzvards }} &#160; {{ $payroll->pk }}</strong>
                                &nbsp; &nbsp;
                                @if ( App::getLocale() == 'lv')
                                    Summa: &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, ',', ' ') }}
                                @elseif ( App::getLocale() == 'en')
                                    Summa: &euro;{{ number_format (($payroll->likme * $payroll->stundu_sk), 2, '.', ',') }}
                                @endif
                                &nbsp;
                                @if ( App::getLocale() == 'lv')
                                    {{ date('d.m.Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @elseif ( App::getLocale() == 'en')
                                    {{ date('m/d/Y', strtotime($payroll->izsniegsanas_datums)) }}
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
