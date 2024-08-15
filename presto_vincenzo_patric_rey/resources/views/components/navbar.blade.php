<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        {{-- dropdown per utenti loggati --}}
        @auth
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>

          <ul class="dropdown-menu">   
            <li>
              <a class="nav-link" href="/account">Pagina personale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('articles.index') }}">Elenco Articoli</a>
            </li>
            <li><hr class="dropdown-divider"></li>              
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button class="nav-link" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        {{-- dropdown per utenti non loggati --}}
        @else
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              <li><a class="dropdown-item" href="/register">Registrati</a></li>
            </ul>
          </li>
        @endauth

      </div>
    </div>
  </nav>