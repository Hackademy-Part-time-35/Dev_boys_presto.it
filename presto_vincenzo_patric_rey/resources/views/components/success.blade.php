
@if(session()->has('success'))
<div class="alert alert-success text-center my-2 w-50">
    {{session('success')}}
</div>
@endif