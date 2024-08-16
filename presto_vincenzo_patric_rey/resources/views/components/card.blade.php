@props(['title'])
@props(['price'])

<div class="card mx-auto card-w shadow text-center mb-3" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="Immagine dell'articolo {{$title}}">
    <div class="card-body">
      <h5 class="card-title">{{$title}}</h5>
      <h6 class="card-subtitle text-body-secondary">{{$price}} </h6>
      <div class="d-flex justify-content-evenly align-item-center mt-5">
        <a href="#" class="btn btn-primary">Dettaglio</a>
        <a href="" class="btn btn-outline-info">Categoria</a>
      </div>
    </div>
</div>