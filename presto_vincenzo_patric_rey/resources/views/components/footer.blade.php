
<div class="card rounded-0 bg-black">
    <h5 class="card-header rounded-0 fontBenvenuto2 text-white fs-1">{{ __('ui.contacts')}}</h5>
    <div class="container-fluid ps-3 mt-2 mb-4">
        <div class="row align-items-center justify-content-between fs-6 p-1">
            <div class="col-md-3">
                <ul class="mt-3 list-unstyled">
                    <li class="text-white"><i class="fa-solid fa-mobile-screen-button me-3 mb-2 fs-4 coloreIcone"></i>Tel: 345 678 9030</li>
                    <li class="text-white"><i class="fa-solid fa-phone me-3 mb-2 fs-5 coloreIcone"></i>Fisso: 089 345 5678</li>
                    <li class="text-white"><i class="fa-solid fa-fax me-3 mb-2 fs-5 coloreIcone"></i>Fax: 045366275627</li>
                    <li class="text-white"><i class="fa-regular fa-envelope me-3 mb-2 fs-5 coloreIcone"></i>presto@gmail.com</li>
                    <li class="text-white"><i class="fa-regular fa-building me-3 mb-2 fs-4 coloreIcone"></i>Sede: Livorno</li>
                </ul>   
            </div>
            <div class="col-md-3 text-center my-4 fs-3 text-white">
                <h5 class="fw-bold">Modalità di pagamento:</h5>
                <i class="fa-regular fa-credit-card"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-stripe"></i><br>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-discover"></i>
                <i class="fa-brands fa-cc-apple-pay"></i>
                <i class="fa-brands fa-cc-amazon-pay"></i>
            </div>

            @auth

            @if (Auth::user()->is_revisor)

            <div class="col-md-3 text-center my-4 fs-3 text-white">
                <h5 class="fw-bold">Sei un revisore.</h5>
                <div>
                    <img src="data:image/png;base64,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" alt="">
                </div>
            </div>
            
            @else
            <div class="col-md-6 text-center text-white">
                    <h5 class="fw-bold">{{__('ui.revisor1')}}</h5>
                    <p>{{__('ui.revisor2')}}</p>
            
                    <a href="{{route('become.revisor')}}" class="btn bottone">{{__('ui.revisor3')}}</a>
            </div>
            @endif
            
            @endauth
        </div>
    </div>
</div>
  