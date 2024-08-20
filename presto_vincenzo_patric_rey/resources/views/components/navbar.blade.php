<nav class="navbar navbar-expand-lg border-bottom sfondo fixed-top py-3">
  <div class="container-fluid w-75">
    <a class="navbar-brand font1" href="/">PRESTO.<span class="fontIt">it</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse myNavButton" id="navbarSupportedContent">
      <ul class="container-fluid justify-content-end navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">HOME</a>
          </li>
        {{-- dropdown per utenti loggati --}}
        @auth
        <li class="nav-item dropdown myNavButton">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="nav-link navLinks" href="/account">Pagina personale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navLinks" href="{{ route('articles.index') }}">Elenco Articoli</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link navLinks" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
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
    </div>
  </div>
</nav>