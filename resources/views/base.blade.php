<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel Contacts</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<body>
    <div class="container">   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('contacts.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts.create') }}">Ajouter Contact</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" method="post" action="{{ route('contacts.search') }}">
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav> 
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>