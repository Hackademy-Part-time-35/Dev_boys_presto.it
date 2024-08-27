@props(['article'])

<div class="card carte rounded-0 mx-auto card-w text-center mb-4 p-3" style="width: 18rem;">
    <a href="{{route('article.show', $article)}}"><img src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path): 'https://picsum.photos/500/300'}}"  class="img-fluid bordoFoto" alt="Immagine dell'articolo {{ $article->title }}"></a>
    <div class="card-body">
      <h5 class="card-title mb-3">{{$article->title}}</h5>
      <h6 class="card-subtitle text-body-secondary mb-3">{{$article->price}} $</h6>
      
      <div class="d-flex justify-content-evenly align-item-center mt-4 mb-2">
        <a href="{{route('article.show', $article)}}" class="btn bottone2">{{ __('ui.details')}}</a>
        <a href="{{route('category.category')}}" class="btn bottone2">{{ __('ui.category')}}</a>
      </div>
      
    </div>
    <p class="nascondi card-subtitle text-body-secondary fw-light fst-italic text-end">{{$article->user->name}}</p>
</div>