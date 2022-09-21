<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">DC COMICS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(Route::is('comics')) active @endif" aria-current="page" href="{{ route('comics.index') }}">Comics</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>