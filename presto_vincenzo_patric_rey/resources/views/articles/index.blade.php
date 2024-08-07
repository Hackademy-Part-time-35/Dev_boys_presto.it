<x-layout title='Elenco Articoli'>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{$title}}</h1>
            </div>
           
            <div class="col-lg-6 text-end">
                <a href="" class="btn btn-warning">Torna alla Home</a>
            </div>
        </div>
       

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr class=" table-danger">
                        <th>#</th>
                        <th>title</th>
                        <th>category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category}}</td>
                        <td>
                            <a href="{{route('articles.edit',$article)}}" class=" btn btn-outline-dark">Modifica</a>
                            
                            <form class=" d-inline ms-2" action="{{route('articles.destroy',$article)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" btn btn-danger">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 text-end">
            <a href="{{ route('articles.create') }}" class="btn btn-warning">Crea Articolo</a>
        </div>
    </div>
   
</x-layout>