@extends('layouts.app')

@section('page-title', 'COMIC')

@section('content')

    <div class="row">
        <div class="col-3"><img src="{{ $comic['thumb'] }}" alt=""></div>
        <div class="col">
            <h1>{{ $comic['title'] }}</h1>
            <p>{{ $comic['description'] }}</p>
            <hr>
            <div class="row">
                <div class="col">
                    <span><strong>Series:</strong> {{ $comic['series'] }}</span>
                    <br>
                    <span><strong>Price:</strong> {{ $comic['price'] }}</span>
                </div>
                <div class="col">
                    <span><strong>Type:</strong> {{ $comic['type'] }}</span>
                    <br>
                    <span><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</span>
                </div>
            </div>
        </div>
    </div>

@endsection
