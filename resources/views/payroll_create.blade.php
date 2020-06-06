@extends('layouts.app')
@section('content')
    <h4>Saraksts ar visiem šobrīd aktuālajiem darbiniekiem</h4>
    @if(count($aktualie) == 0)
        <h5>Šobrīd uzņēmumā neviens nestrādā!</h5>
    @else
        <table>
            <tr>
                <th>Amata nosaukums</th>
                <th>Darba pildītāja ID</th>
                <th>Amata stundas likme</th>
                <th>Stundu skaits</th>
                <th>Algas apjoms</th>
            </tr>
            @foreach ( $aktualie as $amat)
                <tr>
                    <td>{{ $amat->nosaukums }}</td>
                    <td>{{ $amat->darba_pilditajs }}</td>
                    <td>{{ $amat->stundas_likme }}</td>
                    <td><input type="text"></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    @endif

    <h4>Saraksts ar visiem šajā mēnesī aizgājušajiem darbiniekiem</h4>
    @if(count($atlaistie) == 0)
        <h5>Pēdējā mēneša laikā neviens nav aizgājis!</h5>
    @else
        <table>
            <tr>
                <th>Amata nosaukums</th>
                <th>Darba pildītāja ID</th>
                <th>Amata stundas likme</th>
            </tr>
            @foreach ( $atlaistie as $amat)
                <tr>
                    <td>{{ $amat->nosaukums }}</td>
                    <td>{{ $amat->darba_pilditajs }}</td>
                    <td>{{ $amat->stundas_likme }}</td>
                    <td><input type="text"></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
