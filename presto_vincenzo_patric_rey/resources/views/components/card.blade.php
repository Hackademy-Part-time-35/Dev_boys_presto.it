@props(['article'])

<div class="card carte rounded-0 mx-auto card-w text-center mb-4 p-3" style="width: 18rem;">
    <a href="{{route('article.show', $article)}}"><img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(500, 300): 'https://picsum.photos/500/300'}}"  class="img-fluid bordoFoto" alt="Immagine dell'articolo {{ $article->title }}"></a>
    <div class="card-body p-1">
      <h5 class="card-title mb-3">{{$article->title}}</h5>
      <h6 class="card-subtitle text-body-secondary mb-3">{{$article->price}} $</h6>
      
      <div class="mt-4 mb-2">
        
        {{-- <a href="{{route('category.category')}}" class="btn bottone2 truncate-text">{{ $article->category->name }}</a> --}}
        <a href="{{ route('category.category', ['category_id' => $article->category->id]) }}" class="btn bottone2 d-block truncate-text mb-2">{{ ucfirst($article->category->name) }}</a>
        <a href="{{route('article.show', $article)}}" class="btn d-block bottone2 ">{{ __('ui.details')}}</a>
       
       
      </div>
      <p class="nascondi card-subtitle text-body-secondary fw-light fst-italic text-end pt-3">{{$article->user->name}}</p>
    </div>
    
</div>