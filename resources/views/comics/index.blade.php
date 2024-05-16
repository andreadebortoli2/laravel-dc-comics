@extends('layouts.app')

@section('page-title', 'COMICS')

@section('content')

    <div class="d-flex justify-content-between align-items-center pb-4">
        <h1>COMICS LIST</h1>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">ADD COMIC</a>

    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr class="">
                        <td scope="row">{{ $comic['id'] }}</td>
                        <td>{{ $comic['title'] }}</td>
                        <td><img width="100" src="{{ $comic['thumb'] }}" alt=""></td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ $comic['sale_date'] }}</td>
                        <td>{{ $comic['type'] }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}">SHOW</a>
                            /
                            <a href="{{ route('comics.edit', $comic) }}">EDIT</a>
                            /
                            <a href="">DELETE</a>
                        </td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="8">Nothing to show</td>
                @endforelse
                </tr>
            </tbody>
        </table>

        {{ $comics->links('pagination::bootstrap-5') }}

    </div>

@endsection
