<x-layout>

<div class="container mt-5">
    <div class="row">
    <h1 id="titolo" class="fontTitolo text-center border"></h1>
        <div class="col-lg-6 mx-auto">

            

            <div class="card rounded-0 mt-5">
                <div class="card-header d-flex justify-content-between position-relative rounded-0">
                    <!-- Riquadro animato -->
                    <div id="activeBackground" class="active-background backGround"></div>
                        
                    <!-- Pulsanti -->
                    <button id="loginBtn" class="btn btn-lg rounded-0 text-uppercase fw-normal">Login</button>
                    <button id="registerBtn" class="btn btn-lg rounded-0 text-uppercase fw-normal">Registrati</button>
                </div>
            

                <div class="card-body">
                    {{-- Form di login --}}
                    <form id="loginForm" action="/login" method="POST" class="mt-3 form-transition">
                        @csrf
                        <div class="row g-4 height-custom text-center">
                            <div class="col-12">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" class="form-control mt-2 rounded-0"  value="{{old('email')}}">
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control mt-2 rounded-0">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn bottone">Accedi</button>
                            </div>
                        </div>
                    </form>

                    {{-- Form di registrazione --}}
                    <form id="registerForm" action="/register" method="POST" class="mt-3">
                        @csrf
                        <div class="row g-4 text-center">
                            <div class="col-12">
                                <label for="name">NOME UTENTE</label>
                                <input type="text" name="name" id="name" class="form-control rounded-0" value="{{ old('name') }}">
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" class="form-control rounded-0">
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control rounded-0">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation">CONFERMA PASSWORD</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-0">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn bottone">Registrati</button>
                            </div>
                        </div>
                    </form>
        
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>