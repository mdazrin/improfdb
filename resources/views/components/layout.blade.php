<!doctype html>
<title>Improf</title>
<head>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/basic">Basic Table</a>
                    </li>
                    @endauth
                    @auth
                        <li class="nav-item">
                            <form method="POST" action={{ route('/logout') }}>
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
{{$content}}
</body>
