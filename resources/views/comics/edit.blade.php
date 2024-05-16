@extends('layouts.app')

@section('page-title', 'edit comic')

@section('content')

    @include('partials.error-alert')

    <form action="{{ route('comics.update', $comic) }}" method="post">
        @csrf
        @method('PUT')
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="mb-2">
                <label for="title" class="form-label">Comic Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="helpId" placeholder="Title" value="{{ old('title', $comic->title) }}" />
                <small id="helpId" class="form-text text-muted">Write the title of the comic</small>
                @error('title')
                    <div class=" text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="thumb" class="form-label">Comic Cover</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="helpId" placeholder="https://"
                    value="{{ old('thumb', $comic->thumb) }}" />
                <small id="helpId" class="form-text text-muted">add the url of the cover image</small>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Comic Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpId" placeholder="$9.99"
                    value="{{ old('price', $comic->price) }}" />
                <small id="helpId" class="form-text text-muted">Write the price of the comic</small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="series" class="form-label">Comic Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpId" placeholder="Action Comics"
                    value="{{ old('series', $comic->series) }}" />
                <small id="helpId" class="form-text text-muted">Write the series of the comic</small>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="sale_date" class="form-label">Comic Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpId" placeholder="yyyy/mm/dd"
                    value="{{ old('sale-date', $comic->sale_date) }}" />
                <small id="helpId" class="form-text text-muted">Write the sale date of the comic</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="type" class="form-label">Comic Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" placeholder="comic book" value="{{ old('type', $comic->type) }}" />
                <small id="helpId" class="form-text text-muted">Write the type of the comic</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="description" class="form-label"></label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6" placeholder="Write the description of the comic">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <a class="btn btn-secondary me-3" href="{{ route('comics.index') }}">CANCEL</a>
                <button type="submit" class="btn btn-primary">
                    EDIT COMIC
                </button>
            </div>

        </form>

    @endsection
