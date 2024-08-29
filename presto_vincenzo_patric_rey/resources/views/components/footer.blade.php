
<div class="card rounded-0 bg-black">
    <h5 class="card-header rounded-0 fontBenvenuto2 text-white fs-1">{{ __('ui.contacts')}}</h5>
    <div class="container-fluid ps-3 mt-2 mb-4">
        <div class="row align-items-center fs-6">
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
            <div class="col-md-6 text-center text-white">
                    <h5 class="fw-bold">{{__('ui.revisor1')}}</h5>
                    <p>{{__('ui.revisor2')}}</p>
            
                    <a href="{{route('become.revisor')}}" class="btn bottone">{{__('ui.revisor3')}}</a>
            </div>
        </div>
    </div>
</div>
  