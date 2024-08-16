
<x-layout>

    <h1 class="display-3 fw-bold text-primary text-center mb-5">Benvenuto in Presto.it</h1>

    @auth
    <h3>Ciao {{ auth()->user()->name }} ora puoi inserire il tuo annuncio:</h3>
    <button type="button" class="btn btn-primary"><a href="/articles/create">Crea annuncio</a></button>
    @else
    <h3>Vuoi aggiungere un annuncio? <br></h3>
    <p>Prima fai il login:</p>
    <button type="button" class="btn btn-primary">
        <a href="\login" >Login</a>
    </button>
    <p>Non sei ancora registrato? Fallo subito!</p>
    <button type="button" class="btn btn-primary">
        <a href="\register" >Registrati</a>
    </button>
    @endauth

    <div class="col-12 mt-5 d-flex row max-auto" >
        @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card mx-auto card-w shadow text-center mb-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Immagine dell'articolo {{ $article->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $article->title}}</h5>
                      <h6 class="card-subtitle text-body-secondary">{{$article->price}} $ </h6>
                      <div class="d-flex justify-content-evenly align-item-center mt-5">
                        <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
                        <a href="" class="btn btn-outline-info">Categoria</a>
                      </div>
                    </div>
                  </div>
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
                </h3>
            </div>
        @endforelse

    </div>

</x-layout>

