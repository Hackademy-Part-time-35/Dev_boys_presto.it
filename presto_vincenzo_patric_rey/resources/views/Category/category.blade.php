{{-- <x-layout>

<div class="container">
    <h1>Categorie</h1>
    <br>
    
    @foreach($categories as $category)
        <h2>{{ $category->name }}</h2>
        @if($category->articles->isEmpty())
            <p>Non ci sono articoli collegati a questa categoria.</p>
        @else
            <ul>
                @foreach($category->articles as $article)
                    <li>{{ $article->title }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
</div>

</x-layout> --}}

{{-- Prova filtri --}}

<x-layout>

    <div class="container">
        <h1>Prodotti per categoria</h1>

        <form  method="GET" action="{{ route('category.category')}}" >
            <div class="form-group">
                <label for="category">Seleziona Categoria:</label>
                <select name="category_id" id="category" class="form-control">
                    <option value="">Tutte le categorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Applica</button>
        </form>

        {{-- Lista prodotti --}}
        <div class="mt-4">
            @if($articles->isEmpty())
                <p>Nessun prodotto trovato</p>
            @else
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{$article->title}}</h5>
                                    <p class="card-text">Categoria: {{$article->category->name}}</p>
                                    <p class="card-text">Prezzo: {{$article->price}}€</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


</x-layout>