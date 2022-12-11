<!doctype html>
<title>Improf</title>
<head>
    @vite(['resources/js/app.js'])
    <!-- Include the basic styles & the library -->
</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Improf Database System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Improf Database System</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('users.index') }}>Improf Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('personals-info.index') }}>Personal Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" aria-current="page" href={{ route('users.show',auth()->user()) }}>Show Your Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" aria-current="page" href={{ route('users.edit',auth()->user()) }}>Edit Your Profile</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form method="POST" action={{ route('logout') }}>
                    @csrf
                    <button class="btn btn-dark" type="submit">Logout</button>
                </form>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('login') }}>Login</a>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</nav>
{{$content}}
</body>
