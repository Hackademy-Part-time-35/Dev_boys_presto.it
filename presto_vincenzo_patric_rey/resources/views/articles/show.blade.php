<x-layout>






 <div class="container">
  <div class="row height-custom justify-content-center align-items-center text-center h-75">  
    <div class="col-12 mt-5 mb-4">
       <h1 class="fontTitolo text-uppercase">{{$article->title}}</h1>
    </div>
    <div class="row height-custom justify-content-center align-items-center py-5 bg-dark text-white rounded-4">
      <div class="col-12 col-md-6 mb-3">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
         <div class="carousel-inner">
          @if ($article->images->count() > 0)
          <div class="carousel-inner shadow-lg rounded-0">
            @foreach ($article->images as $key => $image)
              <div class="carousel-item @if ($loop->first) active @endif">
                <img src="{{ $image->getUrl(500, 300) }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
              </div>
            @endforeach
         </div>
              @if ($article->images->count() > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              @endif
          @else
            <img src="https://picsum.photos/500/300" alt="Nessuna foto inserita dall'utente" class="d-block w-100 rounded shadow">
          @endif
          </div>
      </div>
      <div class="col-12 col-md-6 height-custom text-center">
        <div class="mb-4">
          <h3 class="font2 fs-5 fw-normal text-uppercase">Titolo: </h2>
          <p class="fs-3 text-uppercase">{{$article->title}}</p>
        </div>
        <div class="mb-4">
            <h3 class="font2 fs-5 fw-normal text-uppercase">Categoria: </h3>
            <p class="fs-3 text-uppercase">{{$article->category->name}}</p>
        </div>
        <div class="mb-4">
            <h3 class="font2 fs-5 fw-normal text-uppercase">Prezzo: </h3>
            <p class="fs-3 text-uppercase">{{$article->price}} $</p>
        </div>
        <div class="mb-4">
          <h3 class="font2 fs-5 fw-normal text-uppercase">Descrizione: </h3>
          <p class="fs-6">{{$article->description}}</p>
        </div>
        <div class="fst-italic">
          <h3 class="font2 fs-5 fw-normal text-uppercase">Autore: </h3>
          <p class="fs-6 fw-light">{{$article->user->name}}</p>
        </div>   
    </div>
    </div>
  </div>
 </div>
</x-layout>