@extends('layouts.site')

@section('title', 'Pop')

@section('content')
    <div class="row">
        <div class="col-sm-2">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top wow fadeInUp" data-wow-delay="0.6s" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/35302887-bf5b-4c46-a9e0-fc72c65ffb50/d2zaii3-22e60a2b-a164-44bd-a487-cb16589a4799.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzM1MzAyODg3LWJmNWItNGM0Ni1hOWUwLWZjNzJjNjVmZmI1MFwvZDJ6YWlpMy0yMmU2MGEyYi1hMTY0LTQ0YmQtYTQ4Ny1jYjE2NTg5YTQ3OTkuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.hm2OTe9W756fttOuga2kQ5lWBIWQcTyfHkS8qvTygyQ" alt="Card image cap">
                    <a href="#!" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
            </div>
        </div>
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
                        <img class="card-img col-6 text-center" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/35302887-bf5b-4c46-a9e0-fc72c65ffb50/d2zaii3-22e60a2b-a164-44bd-a487-cb16589a4799.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzM1MzAyODg3LWJmNWItNGM0Ni1hOWUwLWZjNzJjNjVmZmI1MFwvZDJ6YWlpMy0yMmU2MGEyYi1hMTY0LTQ0YmQtYTQ4Ny1jYjE2NTg5YTQ3OTkuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.hm2OTe9W756fttOuga2kQ5lWBIWQcTyfHkS8qvTygyQ" alt="Card image cap">
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
