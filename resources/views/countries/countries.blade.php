@extends('layouts.site')

@section('title', 'Страны')

@section('content')
    <div class="list">
        <table>
            <th>Поиск по странам</th>

            @foreach( $countries as $country)
                <tr>
                    <td><a href="/countries/{{$country->id}}">{{$country->title}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    {{--    <div class="col-sm-2">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top wow fadeInUp" src="https://bipbap.ru/wp-content/uploads/2018/06/The-catalyst-single-cover-500x500.png"
                         alt="Card image cap">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <a href="#">
                        <h4 class="card-title title-font">Card Title</h4>
                    </a>
                </div>

            </div>
        </div>
        <!-- Card -->--}}
@endsection
