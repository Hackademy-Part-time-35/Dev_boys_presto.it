<x-layout>

 

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6 mx-auto">

            <h1 class="fontBenvenuto text-center">LOGIN</h1>

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


</x-layout>