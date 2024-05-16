@extends('layouts.app')

@section('page-title', 'COMICS')

@section('content')

    <div class="d-flex justify-content-between align-items-center pb-4">
        <h1>COMICS LIST</h1>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">ADD NEW COMIC</a>

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
                            <div class="d-flex">
                                <a class="mx-2 btn btn-primary" href="{{ route('comics.show', $comic) }}">SHOW</a>
                                <a class="mx-2 btn btn-primary" href="{{ route('comics.edit', $comic) }}">EDIT</a>
                                <!-- Modal trigger button -->
                                <button type="button" class="mx-2 btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    DELETE
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Attention! You are deleting {{ $comic->title }}
                                                </h5>
                                            </div>
                                            <div class="modal-body">you're going to delete the {{ $comic->title }} from the
                                                databse and it will not be
                                                possible to recover it</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        DELETE
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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




<!-- Optional: Place to the bottom of scripts -->
{{-- <script>
    const myModal = new bootstrap.Modal(
        document.getElementById("modalId"),
        options,
    );
</script> --}}
