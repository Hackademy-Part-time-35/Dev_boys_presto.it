<x-layout title='Elenco Articoli'>
    {{-- @dd($articles); --}}
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="fontTitolo text-uppercase my-5 border">Tutti gli articoli</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center pt-5">
            @forelse($articles as $article)
                <div class="col-12 col-md-3">
                    
                    <x-card :article="$article"                          
                         />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>