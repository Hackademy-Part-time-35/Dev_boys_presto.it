{{-- <x-layout>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">

            <h1 class="fontTitolo text-center border">LOGIN</h1>

            <form action="/login" method="POST" class="mt-5">
                @csrf
                <div class="row g-4 height-custom text-center">
                    <div class="col-12">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" id="email" class="form-control mt-2">
                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" id="password" class="form-control mt-2">
                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn bottone">Accedi</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</x-layout> --}}
<x-layout>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">

            <h1 id="titolo" class="fontTitolo text-center border">LOGIN</h1>

            <div class="card rounded">
                <div class="card-header d-flex justifycontent-between position-relative">
                    <!-- Riquadro animato -->
                    <div id="activeBackground" class="active-background backGround"></div>
                        
                    <!-- Pulsanti -->
                    <button id="loginBtn" class="btn">Login</button>
                    <button id="registerBtn" class="btn">Registrati</button>
                </div>
            

                <div class="card-body">
                    {{-- Form di login --}}
                    <form id="loginForm" action="/login" method="POST" class="mt-5 form-transition">
                        @csrf
                        <div class="row g-4 height-custom text-center">
                            <div class="col-12">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" class="form-control mt-2"  value="{{old('email')}}">
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control mt-2">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn bottone">Accedi</button>
                            </div>
                        </div>
                    </form>

                    {{-- Form di registrazione --}}
                    <form id="registerForm" action="/register" method="POST" class="mt-5">
                        @csrf
                        <div class="row g-4 text-center">
                            <div class="col-12">
                                <label for="name">NOME UTENTE</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="email">EMAIL</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation">CONFERMA PASSWORD</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
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