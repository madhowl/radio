@extends('layouts.site')

@section('title', 'Добро пожаловать!')

@section('content')
<div class="container">
    <div class="jumbotron text-center navcolor navtext">
        <h1 class="display-4 animated bounce infinite">Привет!</h1>
        <p class="lead">Добро пожаловать на сайт, где вы сможете слушать онлайн радиостанции.</p>
        <hr class="my-4">
        <p>Начните слушать любимую музыку прямо сейчас!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/main" role="button">Начать!</a>
        </p>
    </div>
</div>
@endsection
