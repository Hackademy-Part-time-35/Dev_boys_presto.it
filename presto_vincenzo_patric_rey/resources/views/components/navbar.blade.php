<nav class="navbar navbar-expand-lg px-lg-0 px-xs-2 border-bottom sfondo fixed-top py-3">
  <div class="container-fluid myNavbar">
    <a class="navbar-brand font1" href="/">PRESTO.<span class="fontIt">it</span><div id="rettangolo" class="ms-2 d-inline-block"></div></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse myNavButton" id="navbarSupportedContent">
      <ul class="container-fluid justify-content-end navbar-nav mb-2 mb-lg-0 ms-2">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">HOME</a>
          </li>
          <i class="bi bi-file-font-fill">
            <span><x-locale lang="it" /></span>
            <span><x-locale lang="en" /></span>
            <span><x-locale lang="es" /></span>
          </i>
        {{-- dropdown per utenti loggati --}}
        @auth
        <li class="nav-item dropdown myNavButton">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ strtoupper(auth()->user()->name) }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="nav-link navLinks" href="/account">My Space</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLinks" href="{{ route('articles.index') }}">Elenco Articoli</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link navLinks bordo" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        {{-- Area revisore --}}
        @if (Auth::user()->is_revisor)
          <li class="nav-item">
            <a class="nav-link text-start btn btn-sm position-relative w-sm-25" href="{{ route('revisor.index') }}">
              ZONA REVISORE
              <span 
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-black" id="tastino">{{ \App\Models\Article::toBeRevisedCount() }}
              </span>
            </a>
          </li>
        @endif
       {{-- Fine area revisore --}}

        {{-- dropdown per utenti non loggati --}}
        @else
          <li class="nav-item dropdown myNavButton">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              ACCOUNT
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              <li><a class="dropdown-item" href="/register">Registrati</a></li>
            </ul>
          </li>
        @endauth
        </ul>
        <form action="{{ route('article.search') }}" role="search" method="GET" class="d-flex ms-auto">
          <div class="input-group">
            <button class="input-group-text btn bottone2 border border-0" id="basic-addon2">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="search" name="query" aria-label="search" class="form-control rounded-0 bordo">
            
          </div>
        </form>
    </div>
  </div>
</nav>