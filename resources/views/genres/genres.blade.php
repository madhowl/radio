@extends('layouts.site')

@section('title', 'Жанры')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <table>
                <th class="h3">Фильтр по жанрам</th>
                @foreach( $categories as $category)
                    <tr>
                        <td><a class="h3" href="/genres/{{$category->id}}">{{$category->title}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
