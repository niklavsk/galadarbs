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
            </tr>
            @foreach ( $aktualie as $amat)
                <tr>
                    <td>{{ $amat->nosaukums }}</td>
                    <td>{{ $amat->darba_pilditajs }}</td>
                    <td>{{ $amat->stundas_likme }}</td>
                    <td>
                        <form action="{{action('PayController@store')}}" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input type="hidden" id="pers_kods" name="pers_kods" value="{{ $amat->darba_pilditajs }}">
                            <input type="hidden" id="amats" name="amats" value="{{ $amat->id }}">
                            <input type="hidden" id="likme" name="likme" value="{{ $amat->stundas_likme }}">
                            <input type="text" id="stundu_sk" name="stundu_sk">
                            <input type="hidden" id="izsniegsanas_datums" name="izsniegsanas_datums" value="{{ date("Y-m-d") }}">
                            <input type="submit" value="Apstiprināt" class="btn">
                        </form>
                    </td>
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
                </tr>
            @endforeach
        </table>
    @endif
@endsection
