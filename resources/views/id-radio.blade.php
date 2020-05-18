@extends('layouts.site')

@section('title', 'id-radio')

@section('content')
    <div class="container">
    @foreach( $radios as $radio )
            <div class="h3">
                {{ $radio->title }}
            </div>
        {{--<div class="row">
                <div class="pl-3">
                    <img src="{{ $radio->image }}">
                </div>
        </div>
            <div class="py-1">{{ $radio->description }}</div>--}}
            <div class="d-flex bd-highlight">
                <div class="flex-shrink-1 bd-highlight"><img src="{{ $radio->image }}"></div>
                <div class="pl-2 w-100 bd-highlight">{{ $radio->description }}</div>
            </div>
        <hr>
        <audio src="{{ $radio->link }}"></audio>
        <hr>
        <div class="d-flex justify-content-end">Добавлено: {{ $radio->created_at }}</div>
            <div class="d-flex justify-content-end">Обновлено: {{ $radio->updated_at }}</div>
    @endforeach
    </div>
@endsection
