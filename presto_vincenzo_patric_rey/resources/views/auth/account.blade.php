<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Ciao {{ auth()->user()->name }} ora puoi inserire il tuo annuncio:</h3>
                <button type="button" class="btn btn-primary">Crea annuncio</button>
            </div>
        </div>
    </div>
    
    
</x-layout>