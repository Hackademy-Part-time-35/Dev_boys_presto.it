<x-layout>
    <form method="GET" action="{{ route('category.category') }}">
        <div class="row justify-content-center">
            <div class="form-group text-center col-md-6">
                <label for="category" class="font1 fs-4 fw-bold mb-2">Seleziona Categoria:</label>
                <select name="category_id" id="category" class="form-control text-center font2 text-black fs-6">
                    <option value="" class="">Tutte le categorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $categoryId ? 'selected' : '' }}>
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
                    <x-card :article="$article" />
                @endforeach
            </div>
        @endif
    </div>
    
</x-layout>