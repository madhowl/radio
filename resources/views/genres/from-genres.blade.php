@extends('layouts.site')

@section('title', 'Radios')

@section('content')
    @foreach( $radios as $radio)
        <div class="col-sm-2">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top wow fadeInUp" src="{{ $radio->image }}"
                         alt="{{ $radio->title }}">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">

            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
            <div class="modal-dialog modal-dialog-centered" role="document">


                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLongTitle">{{ $radio->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="col-sm-6" src="{{ $radio->image }}"
                             alt="{{ $radio->title }}">
                        <hr>
                        <div>{{ $radio->description }}</div>
                        <hr>
                        <audio src="{{ $radio->link }}" preload="auto"></audio>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
