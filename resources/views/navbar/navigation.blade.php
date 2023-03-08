<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create.book') }}">create book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.view') }}">create category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('author.view') }}">create Author</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            {{-- @if(Session::has('login'))
                <a href="{{ route('auth.register.view') }}">
                    <button class="btn btn-outline-success" type="submit">
                        Register
                    </button>
                </a>
                <a href="{{ route('auth.login.view') }}">
                    <button class="btn btn-outline-success" type="submit">
                        Login
                    </button>
                </a>
            @endif --}}
        </div>
    </div>
</nav>
