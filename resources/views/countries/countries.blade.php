@extends('layouts.site')

@section('title', 'Страны')

@section('content')
    <div class="container">
    <div class="row justify-content-center text-center">
        <table>
            <th class="h3">Фильтр по странам</th>
            @foreach( $countries as $country)
                <tr>
                    <td><a class="h3" href="/countries/{{$country->id}}">{{$country->title}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
@endsection
