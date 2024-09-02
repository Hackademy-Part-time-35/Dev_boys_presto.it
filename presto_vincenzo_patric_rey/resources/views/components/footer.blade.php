
<div class="card rounded-0 bg-black">
    <div class="container-fluid ps-3 my-4">
        <div class="row align-items-center justify-content-evenly fs-6 p-1">
            <div class="col-md-3 d-flex flex-column align-items-center">
                <ul class="mt-3 list-unstyled text-white contatti">
                    <li><i class="fa-solid fa-mobile-screen-button me-3 mb-2 fs-4"></i>{{__('ui.phone')}}: 345 678 9030</li>
                    <li><i class="fa-solid fa-phone me-3 mb-2 fs-5"></i>{{__('ui.landline')}}: 089 345 5678</li>
                    <li><i class="fa-solid fa-fax me-3 mb-2 fs-5"></i>Fax: 045366275627</li>
                    <li><i class="fa-regular fa-envelope me-3 mb-2 fs-5"></i>presto@gmail.com</li>
                    <li><i class="fa-regular fa-building me-3 mb-2 fs-4"></i>{{__('ui.workplace')}}: Livorno (LI)</li>
                </ul>   
            </div>
            <div class="col-md-3 text-center my-4 fs-3 text-white">
                <h5 class="fw-bold">{{__('ui.payment')}}:</h5>
                <i class="fa-regular fa-credit-card"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-stripe"></i><br>
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-discover"></i>
                <i class="fa-brands fa-cc-apple-pay"></i>
                <i class="fa-brands fa-cc-amazon-pay"></i>
            </div>

            <div class="col-md-3 text-center text-white my-4">
                    <h5 class="fw-bold">{{__('ui.app1')}}</h5>
                    <p>{{__('ui.app2')}}</p>
            
                    <a href="#" class="btn btn-lg bottone me-2"><i class="fa-brands fa-apple"></i></a>
                    <a href="#" class="btn btn-lg bottone"><i class="fa-brands fa-android"></i></a>
            </div>

            @auth

            @if (Auth::user()->is_revisor)

            <div class="col-md-3 text-center my-4 fs-3 text-white">
                <h5 class="fw-bold">{{__('ui.revisor4')}}</h5>
                <i class="fa-regular fa-circle-check text-success fs-2"></i>
            </div>
            
            @else
            <div class="col-md-3 text-center text-white my-4">
                    <h5 class="fw-bold">{{__('ui.revisor1')}}</h5>
                    <p>{{__('ui.revisor2')}}</p>
            
                    <a href="{{route('become.revisor')}}" class="btn bottone">{{__('ui.revisor3')}}</a>
            </div>
            @endif
            
            @endauth

            
        </div>
    </div>
</div>
  