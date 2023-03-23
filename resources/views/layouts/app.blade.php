<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/85cf7fc829.js" crossorigin="anonymous"></script>
    @stack('styles')
</head>
<body>
    <header>
        <nav class="main-nav">
            <a href="">
                <img src="{{asset ('imagini/logo.png')}}" alt="" class="logo">
            </a>
            <nav class="links">
                <a href="#" class="active">Despre</a>
                <a href="#">Produse  metodice</a>
                <a href="#">Exemple de lucru</a>
            </nav>
        </nav>
        <div class="home-content">
            <h1>Perform de promovare</h1>
            <p>Centrul Republican de Învățământ din subordinea Ministerului Educației Publice Platforma unică servește la popularizarea celor mai bune practici ale pedagogilor</p>
            <div class="buttons">
                <a href="#">Inscrie-te</a>
                <a href="#">Autentificare</a>
            </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
       <p class="autor">
         Furtuna Eugeniu, AAW1942
       </p>
    </footer>
    @stack('scripts')
</body>
</html>
