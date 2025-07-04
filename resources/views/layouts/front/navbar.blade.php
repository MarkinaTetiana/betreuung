<nav class="container navbar navbar-light bg-light px-3">
    <a href="#" class="navbar-brand m-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"  width="240" height="60" >
    </a>
    <div class="d-flex flex-wrap gap-2 m-2 justify-content-end">
        <a href="{{ route('front.index') }}" class="btn btn-secondary me-2">Home</a>
        <a href="#" class="btn btn-secondary me-2">About</a>
        <a href="{{ route('contact')}}" class="btn btn-secondary me-2">Contact</a>
        <a href="{{ route('coming_soon') }}" class="btn btn-primary me-2">Services</a> 
        <a href="#" class="btn btn-secondary me-2">Login</a>
        <a href="#" class="btn btn-secondary">Register</a>
    </div>
</nav>