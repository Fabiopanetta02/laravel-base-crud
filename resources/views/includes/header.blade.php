<header>
  <div class="bg-primary">
    <div class="container text-end py-1">
      <a class="pe-5 text-white text-decoration-none" href="#">DC Power <span class="sigla">SM</span> VISA <i class="far fa-registered"></i></a>
      <a href="#" class="text-white text-decoration-none">Additional dc Sites <i class="fas fa-sort-down"></i></a>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <div>
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{asset('images/dc-logo.png')}}" alt="logo dc azzurro" width="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">CHARACTERS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(Route::is('comics')) active @endif text-dark" aria-current="page" href="{{ route('comics.index') }}">Comics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">TV</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">GAMES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">COLLECTIBLES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">VIDEOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">FANS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">NEWS</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-dark">SHOP <i class="fas fa-sort-down"></i></a>
                </li>
            </ul>
          </div>
          <div class="search">
            <a class="nav-link text-dark" href="#">Search <i class="fas fa-search"></i></a>
        </div>
        </div>
      </nav>
</header>








