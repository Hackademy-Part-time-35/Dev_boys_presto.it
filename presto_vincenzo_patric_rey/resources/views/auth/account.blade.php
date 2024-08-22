<x-layout>

    <div class="container-fluid mt-5">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="fontTitolo text-uppercase mb-5 border">My space</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <h3 class="mb-4 text-uppercase">Ciao {{ auth()->user()->name }}, inserisci il tuo annuncio:</h3>
                <button type="button" class="btn bottone">
                    <a href="/articles/create">Crea annuncio</a>
                </button>
            </div>
        </div>
    </div>
    
    
</x-layout>