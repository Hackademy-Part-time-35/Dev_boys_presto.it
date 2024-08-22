<x-layout>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="border">
                    <h1 class="fontTitolo text-uppercase mb-0">
                        Revisor dashboard
                    </h1>         
                </div>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        @if ($article_to_check)
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="https://picsum.photos/id/238/500/300" alt="" class="img-fluid rounded shadow">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4 ps-4 d-flex flex-column justify-content-evenly text-center">
                <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                    <h1 class="font2 text-uppercase">{{ $article_to_check->title }}</h1>
                    <h3 class="font1 fs-4">Autore: {{ $article_to_check->user->name }}</h3>
                    <h4 class="font1 fs-4 fw-bold">{{ $article_to_check->price }}$</h4>
                    <h4 class="fst-italic fw-light">#{{$article_to_check->category->name}}</h4>
                    <p class="font1 fs-6">{{ $article_to_check->description}}</p>
                </div>
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">
                            Accetta
                        </button>
                    </form>
                    <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">
                            Rifiuta
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center height-custom text-center mt-5">
            <div class="col-12">
                <h1 class="font1">
                    Nessun articolo da revisionare
                </h1>
                <a href="{{ route('homepage')}}" class="mt-4 btn bottone">Torna all'homepage</a>
            </div>
        </div>
        @endif
    </div>

</x-layout>