<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a href="{{route('login')}}" class="nav-link d-flex align-items-center btn px-3 rounded text-white">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}"
                       class="nav-link d-flex align-items-center btn px-3 rounded text-white">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

