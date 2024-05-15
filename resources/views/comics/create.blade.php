@extends('layouts.app')

@section('page-title', 'add comic')

@section('content')

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="mb-2">
            <label for="title" class="form-label">Comic Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                placeholder="Title" />
            <small id="helpId" class="form-text text-muted">Write the title of the comic</small>
        </div>
        <div class="mb-2">
            <label for="thumb" class="form-label">Comic Cover</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                placeholder="https://" />
            <small id="helpId" class="form-text text-muted">add the url of the cover image</small>
        </div>
        <div class="mb-2">
            <label for="price" class="form-label">Comic Price</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                placeholder="$9.99" />
            <small id="helpId" class="form-text text-muted">Write the price of the comic</small>
        </div>
        <div class="mb-2">
            <label for="series" class="form-label">Comic Series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                placeholder="Action Comics" />
            <small id="helpId" class="form-text text-muted">Write the series of the comic</small>
        </div>
        <div class="mb-2">
            <label for="sale_date" class="form-label">Comic Sale Date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                placeholder="yyyy/mm/dd" />
            <small id="helpId" class="form-text text-muted">Write the sale date of the comic</small>
        </div>
        <div class="mb-2">
            <label for="type" class="form-label">Comic Type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                placeholder="comic book" />
            <small id="helpId" class="form-text text-muted">Write the type of the comic</small>
        </div>

        <div class="mb-2">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" name="description" id="description" rows="6"
                placeholder="Write the description of the comic"></textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                ADD COMIC
            </button>
        </div>

    </form>

@endsection
