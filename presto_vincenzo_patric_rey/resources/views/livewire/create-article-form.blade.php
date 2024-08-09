<form class="bg-body-tertiary shadow p-5 my-5" wire:submit="store">

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" wire:model="title">
        @error('title')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea id="description" cols="30" rows="10" class="form-control" @error('description') is-invalid @enderror wire:model="description"></textarea>
        @error('description')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" @error('price') is-invalid @enderror id="price" wire:model="price">
        @error('price')
            <P class="fts-italis text-danger">{{$message}} </P>
        @enderror
    </div>
    <div class="mb-3">
        <select id="category" wire:model.blur="category" class="form-control" @error('category') is-invalid @enderror>
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
        <button type="submit" class="btn btn-danger">Crea</button>
    </div>
</form>