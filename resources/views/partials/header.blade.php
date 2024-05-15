<header class="bg-info-subtle">
    <nav class="container nav justify-content-between align-items-center py-2">
        <h1>
            <a class="navbar-brand text-dark" href="/">
                <h2 class="m-0 py-2">LARAVEL-DC-COMICS</h2>
            </a>
        </h1>
        <div class="d-flex">
            <a class="nav-link text-secondary {{ Route::currentRouteName() === 'guests.welcome' ? 'text-black fw-bold' : '' }}"
                href="/">Home</a>
            <a class="nav-link text-secondary {{ Route::currentRouteName() === 'comics.index' ? 'text-black fw-bold' : '' }}"
                href="{{ route('comics.index') }}">Comics</a>
        </div>
    </nav>

</header>
