<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4 text-uppercase">Ciao {{ auth()->user()->name }}, inserisci il tuo annuncio:</h3>
                <button type="button" class="btn bottone">
                    <a href="/articles/create">Crea annuncio</a>
                </button>
            </div>
        </div>
    </div>
    
    
</x-layout>