
<div class="card rounded-0">
    <h5 class="card-header rounded-0 myNavButton fontBenvenuto2 fs-1">{{ __('ui.contacts')}}</h5>
    <div class="container-fluid ps-3 mt-2 mb-4">
        <div class="row align-items-center fs-5">
            <div class="col-md-3">
                <ul class="mt-3 list-unstyled">
                    <li><i class="fa-solid fa-mobile-screen-button me-3 mb-2 fs-4 coloreIcone"></i>Tel: 345 678 9030</li>
                    <li><i class="fa-solid fa-phone me-3 mb-2 fs-5 coloreIcone"></i>Fisso: 089 345 5678</li>
                    <li><i class="fa-solid fa-fax me-3 mb-2 fs-5 coloreIcone"></i>Fax: 045366275627</li>
                    <li><i class="fa-regular fa-envelope me-3 mb-2 fs-5 coloreIcone"></i>presto@gmail.com</li>
                    <li><i class="fa-regular fa-building me-3 mb-2 fs-4 coloreIcone"></i>Sede: Livorno</li>
                </ul>   
            </div>
            <div class="col-md-3 text-center my-4 fs-3">
                <h5 class="fw-bold">Modalità di pagamento:</h5>
                <i class="fa-regular fa-credit-card text-black"></i>
                <i class="fa-brands fa-cc-visa text-black"></i>
                <i class="fa-brands fa-cc-mastercard text-black"></i>
                <i class="fa-brands fa-cc-stripe text-black"></i><br>
                <i class="fa-brands fa-cc-paypal text-black"></i>
                <i class="fa-brands fa-cc-discover text-black"></i>
                <i class="fa-brands fa-cc-apple-pay text-black"></i>
                <i class="fa-brands fa-cc-amazon-pay text-black"></i>
            </div>
            <div class="col-md-6 text-center">
                    <h5 class="fw-bold">{{__('ui.revisor1')}}</h5>
                    <p>{{__('ui.revisor2')}}</p>
            
                    <a href="{{route('become.revisor')}}" class="btn bottone">{{__('ui.revisor3')}}</a>
            </div>
        </div>
    </div>
</div>
  