<x-layout title='Searched'>
    <div class="container-fluid">
        <div class="row py-5 height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="fontTitolo text-uppercase">Risultati per la ricerca <br><span class="font1">"{{ $query }}"</span></h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <div class="col-12 col-md-4">
                    
                    <x-card :article="$article"                          
                         />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrisponde alla tua ricerca
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>