
<x-layout>
    
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 immagine mt-5">
            </div>
                @auth
                <div class="text-center col-12 col-md-6 p-0">
                    <h1 class="fontBenvenuto scritta2 mt-5 mb-0 text-uppercase">{{ __('ui.welcome') }}, </h1>
                    <div class="contenitore"><p class="font1 typed-out">{{ auth()->user()->name }}</p></div>
                </div>
                @else
                <div class="text-center col-12 col-md-6 p-0">
                    <h1 class="fontBenvenuto scritta2 mt-5 mb-0 text-uppercase">{{ __('ui.welcome') }}</h1>
                    <p class="fontBenvenuto fs-1">in </span><span class="font1 border typed-out">PRESTO.it</p>
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
                <div class="border border-3 p-1">
                    @auth
                    <h3 class="mb-4 text-uppercase">{{ __('ui.hello')}} {{ auth()->user()->name }}, {{__('ui.loggato')}}</h3>
                    <button type="button" class="btn bottone"><a href="/articles/create">{{ __('ui.buttonCreate')}}</a></button>
                    @else
                    <h3 class="mb-4 text-uppercase">{{ __('ui.nonLoggato') }}</h3>
                    <p>{{ __('ui.login') }}</p>
                    <button type="button" class="btn bottone mb-3">
                        <a href="\login?form=login" >{{__('ui.buttonLogin')}}</a>
                    </button>
                    <p>{{ __('ui.register') }}</p>
                    <button type="button" class="btn bottone">
                        <a href="\login?form=register" >{{ __('ui.buttonRegister') }}</a>
                    </button>
                    @endauth
                </div>
                <div class="d-flex justify-content-center h-100">
                    <div class="immagine2 mt-5">
                    </div>
                </div>
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

