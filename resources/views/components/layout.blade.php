<!doctype html>
<title>Improf</title>
<head>
    @vite(['resources/js/app.js'])
    <!-- Include the basic styles & the library -->
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('users.index') }}>Improf Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('personals-info.index') }}>Personal Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('users.show',auth()->user()) }}>Your Profile</a>
                    </li>
                     <li class="nav-item">
                        <form method="POST" action={{ route('logout') }}>
                            @csrf
                            <button class="btn btn-dark" type="submit">Logout</button>
                        </form>
                     </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('login') }}>Login</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
{{$content}}
</body>
