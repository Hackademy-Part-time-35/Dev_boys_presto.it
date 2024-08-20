
<x-layout>
    
    @auth
    <div class="text-center">
        <h1 class="fontBenvenuto mt-5 mb-0">BENVENUTO, </h1>
        <p class="font1 mb-5">{{ auth()->user()->name }}</p>
    </div>
    @else
    <div class="text-center">
        <h1 class="fontBenvenuto mt-5 mb-0">BENVENUTO</h1>
        <p class="fontBenvenuto fs-1 mb-5">in </span><span class="font1 border">PRESTO.it<p/>
    </div>
    @endauth

    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                @auth
                <h3 class="mb-4">Ciao {{ auth()->user()->name }}, inserisci il tuo annuncio:</h3>
                <button type="button" class="btn bottone"><a href="/articles/create">Crea annuncio</a></button>
                @else
                <h3 class="mb-4">VUOI AGGIUNGERE UN ANNUNCIO?</h3>
                <p>Prima fai il login:</p>
                <button type="button" class="btn bottone mb-3">
                    <a href="\login" >Login</a>
                </button>
                <p>Non sei ancora registrato? Fallo subito!</p>
                <button type="button" class="btn bottone">
                    <a href="\register" >Registrati</a>
                </button>
                @endauth
            </div>
            
            <div class="col-8 mt-5 d-flex row max-auto" >
                @forelse ($articles as $article)
                    
                    <x-card :article="$article" />
                @empty
                    <div class="col-12">
                        <h3 class="text-center">
                            Non sono ancora stati creati articoli
                        </h3>
                    </div>
                @endforelse
            </div>
            
        </div>
    </div>
</x-layout>

