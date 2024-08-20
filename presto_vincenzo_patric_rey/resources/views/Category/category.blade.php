<x-layout>

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

</x-layout>