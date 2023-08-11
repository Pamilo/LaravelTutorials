<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!--traer cosas de boostrap (el stylesheet)-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" /> <!--traer estilos de la carpeta de css-->
    <title>@yield('title','Online Store')</title>
</head>
<body>
    <!--header--esto es para ponerlo como generico o para que solo aparesca en la home page-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4"> <!--señalar que se hara una nav bar que se podra retraer-->
        <div class= "container">
            <a class ="navbar-brand" href="{{ route('home.index') }}"> Online Store</a> <!--{{ route('home.index') }}se esta ponendo a que el letrero de online store vaya a la home page-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <!--hacer que el simbolo para sacar la navbar solo aparesca cuando esta en pantalla pequeña -->
                <span class= "navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> <!--poniendo cosas en la navbar-->
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <a class="nav-link active" href="{{ route('home.contact') }}">Contact</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Store</a>
                    <a class="nav-link active" href="{{ route('product.create') }}">Create product</a>
                </div>
            </div>
        </div>
    </nav>
    <header class = "masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle','A Laravel EAFIT App')</h2>
        </div>  
    </header>
    <!--header-->
    <div class="container py-4">@yield('content')</div>
    <!--footer-->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small> Copyright -
                <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/danielgarax">
                Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!--footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>
</html>