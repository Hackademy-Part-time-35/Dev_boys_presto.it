<x-layout title='Elenco Articoli'>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h1>{{$title}}</h1>
            </div>
           
            <div class="col-lg-6 text-end">
                <a href="/" class="btn btn-warning">Torna alla Home</a>
            </div>
        </div>
       

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr class=" table-danger">
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name}}</td>
                        <td>{{ $article->price}}</td>
                        <td class="text-end">
                          
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