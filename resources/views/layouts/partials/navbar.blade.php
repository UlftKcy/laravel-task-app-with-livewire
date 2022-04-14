<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3 mb-0">
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                @auth
                    <li class="nav-item active">
                        <a href="{{route('task.create')}}" class="nav-link">Create Task</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('profile')}}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('logout')}}" class="nav-link"><i class="fa-solid fa-power-off"></i></a>
                    </li>
                @else
                    <li class="nav-item active">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

