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
        <div class="modal fade show" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-modal="true" role="dialog" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Annuncio creato con successo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="resetSuccess"></button>
                    </div>
                    <div class="modal-body">
                        Il tuo annuncio è stato creato correttamente!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="resetSuccess">OK</button>
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
