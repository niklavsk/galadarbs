@extends('layouts.app')
@section('content')

    <form action="{{action('PayController@update', ['id' => $payroll->id])}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    </form>

@endsection
