@extends('layouts.site')

@section('title', 'Pop')

@section('content')
    <div class="row">
        <table>
            <th>Название жанра</th>

            @foreach( $categories as $category)
                <tr>
                <td><a href="/genres/{{$category->id}}">{{$category->title}}</a></td>
            </tr>
            @endforeach
        </table>
        <div class="col-sm-2">
            <!-- Card -->
            <div class="card navcolor navtext">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top wow fadeInUp" data-wow-delay="0.6s" src="https://bipbap.ru/wp-content/uploads/2018/06/The-catalyst-single-cover-500x500.png" alt="Card image cap">
                    <a href="#!" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
@endsection
