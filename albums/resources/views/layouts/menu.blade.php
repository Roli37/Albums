<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, #fffb00, #ffc400);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><b>Top 10</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Albums</a>
                </li>
            </ul>
            <a href="{{route('auth.login')}}"><button class="btn btn-outline-dark me-2">Bejelentkezés</button></a>
            <a href="{{route('register.register')}}"><button class="btn btn-dark me-2">Regisztráció</button></a>
        </div>
    </div>
</nav>