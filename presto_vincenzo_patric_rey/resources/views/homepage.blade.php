
<x-layout>

    <h1 class="display-3 fw-bold text-primary text-center mb-5">Benvenuto in Presto.it</h1>

    @auth
    <h3>Ciao {{ auth()->user()->name }} ora puoi inserire il tuo annuncio:</h3>
    <button type="button" class="btn btn-primary">Crea</button>
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


</x-layout>

