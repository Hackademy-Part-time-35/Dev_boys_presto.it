@props(['article'])

<div class="card mx-auto card-w shadow text-center mb-3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="Immagine dell'articolo {{$title}}">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <h6 class="card-subtitle text-body-secondary">{{$article->price}} </h6>
      <div class="d-flex justify-content-evenly align-item-center mt-5">
        <a href="{{route('article.show', $article)}}" class="btn bottone">Dettaglio</a>
        <a href="{{route('category.category')}}" class="btn bottone2">Categoria</a>
      </div>
    </div>
</div>