@extends('layouts.site')

@section('title', 'id')

@section('content')
    @foreach( $radio as $id)
        <img src="{{ $radio->image }}" class="wow fadeInUp" alt="{{ $radio->title }}">
    @endforeach
@endsection
