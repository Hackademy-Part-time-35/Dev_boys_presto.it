
<x-layout>
    
    <div class="container-fluid mb-3">
        <div class="row align-items-center">
            <div class="col-md-3 immagine mt-5">
            </div>
                @auth
                <div class="text-center col-12 col-md-6 p-0">
                    <h1 class="fontBenvenuto scritta2 mt-5 mb-0 text-uppercase">{{ __('ui.welcome') }}, </h1>
                    <p class="font1">{{ auth()->user()->name }}</p>
                </div>
                @else
                <div class="text-center col-12 col-md-6 p-0">
                    <h1 class="fontBenvenuto scritta2 mt-5 mb-0 text-uppercase">{{ __('ui.welcome') }}</h1>
                    <p class="fontBenvenuto fs-1">in </span><span class="font1 border">PRESTO.it</p>
                </div>
                @endauth 
            <div class="col-md-3 immagine mt-5">
            </div>
        </div>
    </div>
   
        
    <div class="row justify-content-center">
        @if (session()->has('message'))
            <div class="alert alert-success text-center w-50">
                {{session('message')}}
            </div>
        @endif  
    </div>
       
            
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            
            <div class="col-12 scritta1 col-md-3 mb-5">
                @auth
                <h3 class="mb-4 text-uppercase">{{ __('ui.hello')}} {{ auth()->user()->name }}, {{__('ui.loggato')}}</h3>
                <button type="button" class="btn bottone"><a href="/articles/create">{{ __('ui.buttonCreate')}}</a></button>
                @else
                <h3 class="mb-4 text-uppercase">{{ __('ui.nonLoggato') }}</h3>
                <p>{{ __('ui.login') }}</p>
                <button type="button" class="btn bottone mb-3">
                    <a href="\login" >{{__('ui.buttonLogin')}}</a>
                </button>
                <p>{{ __('ui.register') }}</p>
                <button type="button" class="btn bottone">
                    <a href="\register" >{{ __('ui.buttonRegister') }}</a>
                </button>
                @endauth
            </div>
            
            <div class="row col-12 col-md-9" >
                @forelse ($articles as $article)
                    
                    <x-card :article="$article" />
                @empty
                    <div class="col-12">
                        <h3 class="text-center">
                            {{ __('ui.noArticles')}}
                        </h3>
                    </div>
                @endforelse
            </div>
            
        </div>
    </div>
</x-layout>

