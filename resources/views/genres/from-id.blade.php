@extends('layouts.site')

@section('title', 'Pop')

@section('content')
    <div class="row">
        @foreach( $radios as $radio)


        <div class="col-sm-2">
            <!-- Card -->
            <div class="card bg-dark text-white">
                <img class="card-img wow fadeInUp" data-wow-delay="0.6s" src="{{ $radio->image }}" alt="{{ $radio->title }}">
                <!-- Card image -->
                <div class="card-img-overlay">
                    <h5>{{ $radio->title }}</h5>
                    <p>{{ $radio->description }}</p>

                    <a href="/radio/{{$radio->id}}" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="mask rgba-white-slight"></div>Слушать радио - {{ $radio->title }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img class="card-img col-6 text-center" src="https://bipbap.ru/wp-content/uploads/2018/06/The-catalyst-single-cover-500x500.png" alt="Card image cap">
                    </div>
                    <hr>
                    <p>Hello Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.

                        Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
                    <hr>
                    <audio src="http://kolber.github.io/audiojs/demos/mp3/juicy.mp3" preload="auto"></audio>
                </div>
                <div class="modal-footer">
                    <a href="#" class="nav-link" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
@endsection
