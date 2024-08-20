<x-layout>






 <div class="container">
  <div class="row height-custom justify-content-center align-items-center text-cente h-75 d-inline-blockgit">
    <div class="col-12">
       <h1 class=" display-4">Dettaglio dell'articolo: {{$article->title}}</h1>
    </div>
    <div class="row height-custom justify-content-center py-5 bg-dark text-white rounded-4 mt-5 ">
      <div class="col-12 col-md-6 mb-3">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner shadow-lg rounded-4">
            <div class="carousel-item active">
              <img src="https://picsum.photos/id/237/200/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3 height-custom text-center">
        <h2 class=" display-5"><span class="fw-bold">Titolo:</span> {{$article->title}}</h2>
        <div class="d-flex flex-column justify-content-center h-75">
            <h3>categoria: {{$article->category->name}}</h3>
            <h4 class="fw-bold">Prezzo: {{$article->price}} $</h4>
            <h5>Descrizione:</h5>
            <p>{{$article->description}}</p>
        </div>
    </div>
    </div>
  </div>
 </div>
</x-layout>