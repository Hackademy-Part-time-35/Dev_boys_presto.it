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
        <h1 class="fontBenvenuto text-uppercase text-center my-5">Prodotti per categoria</h1>

        <form  method="GET" action="{{ route('category.category')}}" >
            <div class="row justify-content-center">
                <div class="form-group text-center col-md-6">
                    <label for="category" class="font1 fs-4 fw-bold mb-2">Seleziona Categoria:</label>
                    <select name="category_id" id="category" class="form-control text-center font2 text-black fs-6">
                        <option value="" class="">Tutte le categorie</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn bottone mt-3 mb-5">Applica</button>
                </div>
            </div>
           
        </form>

        {{-- Lista prodotti --}}
        <div class="mt-4">
            @if($articles->isEmpty())
                <p class="font1 fw-bold fs-4 text-center">Nessun prodotto trovato</p>
            @else
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="card mb-4 rounded-0">
                                <div class="card-body">
                                    <h5 class="card-title font1 fw-bold fs-4 mb-3">{{$article->title}}</h5>
                                    <p class="card-text">Categoria: <span class="coloreTesto1">{{$article->category->name}}</span></p>
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