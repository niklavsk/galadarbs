@extends('layouts.app')
@section('content')

    <h4>{{ $employee->vards }} {{ $employee->uzvards }}</h4>

    <table>

        <tr>
            <th>Nosaukums</th>
            <th>Nodaļa</th>
            <th>Depo</th>
            <th>Stundas likme</th>
            <th>Darba uzsākšanas datums</th>
            <th>Darba beigšanas datums</th>
        </tr>

        @foreach ( $jobs as $job)
            <tr>
                <td>{{ $job->nosaukums }}</td>
                <td>{{ $job->nodala }}</td>
                <td>{{ $job->depo }}</td>
                <td>{{ $job->stundas_likme }}</td>
                <td>{{ $job->darba_uzsaksanas_datums }}</td>
                <td>{{ $job->darba_beigsanas_datums }}</td>
            </tr>
        @endforeach

    </table>


@endsection
