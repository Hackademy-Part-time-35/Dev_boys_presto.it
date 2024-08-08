<x-layout title='Naw Article'>
    

        <h1 class="text-center mt-2" >{{$title}}</h1>
    

 
        
   

    <div class="mt-5">

       
        <form action="{{route('articles.index')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="col-lg-8  col-sm-8 mx-auto  ">
          
            
                <div class="row g-3 rounded-2 shadow-lg mt-5" >

                    <div class="col-12">
                        <label for="title">titolo</label>
                        <input type="text" name="title" id="title" class="form-control" @error('title') is-invalid @enderror>
                        @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div> 

                    
                    <div class="col-12">
                        <label for="category">Ctegoria</label>
                        <input type="text" name="category" id="category" class="form-control" {{ old('category') }} @error('category') is-invalid @enderror>
                        @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div> 

                    <div class="col-12">
                        <label for="price">Prezzo</label>
                        <input type="number" name="price" id="price" class="form-control">
                        @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    
                    
                    <div class="col-12">
                        <label for="description">Descrizione</label>
                    <textarea name="description" id="body"  rows="8" class="form-control" >{{ old('description') }}</textarea>
                    @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-12  mb-auto p-2">
                        <button type="submit" class="btn btn-warning ">Crea Articolo</button>
                    </div>

                </div>

          </div>
           
            
        </form>
        


    </div>
</x-layout>