@props(['article'])

<div class="card rounded-0 mx-auto card-w shadow text-center mb-4 p-3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="{{$article->title}}">
    <div class="card-body">
      <h5 class="card-title mb-3">{{$article->title}}</h5>
      <h6 class="card-subtitle text-body-secondary">{{$article->price}} $</h6>
      <div class="d-flex justify-content-evenly align-item-center mt-4">
        <a href="{{route('article.show', $article)}}" class="btn bottone">Dettaglio</a>
        <a href="{{route('category.category')}}" class="btn bottone2">Categoria</a>
      </div>
    </div>
</div>