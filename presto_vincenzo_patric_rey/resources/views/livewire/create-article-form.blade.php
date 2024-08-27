{{-- <form class="bg-dark shadow py-4 px-5 mt-5 text-center" wire:submit="store">

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif

    <div class="mb-4">
        <label for="title" class="form-label text-uppercase font2 fs-5">Titolo</label>
        <input type="text" class="form-control font2 text-black fs-6 text-center" @error('title') is-invalid @enderror id="title" wire:model.blur="title">
        @error('title')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description" class="form-label text-uppercase font2 fs-5">Descrizione</label>
        <textarea id="description" cols="30" rows="10" class="form-control font2 text-black fs-6" @error('description') is-invalid @enderror wire:model.blur="description"></textarea>
        @error('description')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-4">
        <label for="price" class="form-label text-uppercase font2 fs-5">Prezzo</label>
        <input type="text" class="form-control font2 text-black fs-6 text-center" @error('price') is-invalid @enderror id="price" wire:model.blur="price">
        @error('price')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-4">
        <select id="category" wire:model.blur="category" class="form-control text-uppercase text-center font2 text-black fs-5" @error('category') is-invalid @enderror>
            <option label disabled>Seleziona una categoria</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn bottone3">Crea</button>
    </div>
</form> --}}
<form class="bg-dark shadow py-4 px-5 mt-5 text-center" wire:submit.prevent="store">

    @if (session()->has('success'))
        <!-- Modal di conferma -->
        <div class="modal modal-backdrop fade show" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-modal="true" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header myNavButton text-center">
                        <h5 class="modal-title font2 fs-5 text-white" id="confirmationModalLabel">Annuncio creato con successo</h5>
                        
                    </div>
                    <div class="modal-body font2 fs-6 text-black">
                        <p>Il tuo annuncio è stato creato correttamente!</p>
                        <p class="fw-lighter">Per renderlo pubblico, dovrai attendere che sia confermato da uno dei revisori</p>
                        
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn bottone2" data-bs-dismiss="modal" wire:click="resetSuccess">Continua a creare articoli</button>
                    <button type="button" class="btn bottone2" data-bs-dismiss="modal" wire:click="redirectToMySpace">Ritorna su My Space</button> 
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('livewire:load', function () {
                var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
                confirmationModal.show();
            });
        </script>
    @endif

    <div class="mb-4">
        <label for="title" class="form-label text-uppercase font2 fs-5">Titolo</label>
        <input type="text" class="form-control font2 text-black fs-6 text-center" id="title" wire:model.blur="title">
        @error('title')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description" class="form-label text-uppercase font2 fs-5">Descrizione</label>
        <textarea id="description" cols="30" rows="10" class="form-control font2 text-black fs-6" wire:model.blur="description"></textarea>
        @error('description')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>

    <div class="mb-4">
        <label for="price" class="form-label text-uppercase font2 fs-5">Prezzo</label>
        <input type="text" class="form-control font2 text-black fs-6 text-center" id="price" wire:model.blur="price">
        @error('price')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>

    {{-- inserimento immagine --}}
    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple
        class=" form-control shadow @error('temporary_images') is-invalid @enderroe" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror  
        @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror   
    </div>
    @if(!empty($images))
        <div class="row">
            <div class="col-12">
                    <p>Photo preview:</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                                style="background-image: url({{ $image->temporaryUrl() }});">
                            </div>
                            <button type="button" class=" btn mt-1 btn-danger"
                            wire:click ="removeImage({{ $key }})" >X</button>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif

    <div class="mb-4">
        <select id="category" wire:model.blur="category" class="form-control text-uppercase text-center font2 text-black fs-5">
            <option label disabled>Seleziona una categoria</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn bottone3">Crea</button>
    </div>
</form>
