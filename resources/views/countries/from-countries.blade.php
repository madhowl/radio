@extends('layouts.site')

@section('title', 'Radios')

@section('content')
    <div class="container">
        <div class="row">
            @foreach( $radios as $radio)
                <div class="col-sm-2">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top wow fadeInUp" src="{{ $radio->image }}"
                                 alt="{{ $radio->title }}">
                            <a href="/radio/{{ $radio->id }}">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->

                            <h4 class="card-title title-font">{{ $radio->title }}</h4>
                        </div>

                    </div>
                </div>
                <!-- Card -->
            @endforeach
        </div>
    </div>
@endsection
