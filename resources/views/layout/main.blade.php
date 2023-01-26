<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Biblioteca dos Reis</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css"
        integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    {{-- Icon --}}
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    {{-- Project CSS --}}
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Biblioteca dos Reis Logo"></a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/livros">Livros</a>
                    @auth
                        <a class="nav-link" href="/livros/criar">Adicionar Livro</a>
                            <a class="nav-link" href="/dashboard">Minhas reservas</a>
                    @endauth
                    @guest
                            <a class="nav-link" href="/register">Cadastrar</a>
                            <a class="nav-link" href="/login">Entrar</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
           @if (session('msg'))
    <p class="msg">{{ session('msg') }}</p>
    @endif
    @yield('content')
    </div>
    </div>
    </main>

    <footer>
        <p>Made with &#129505; by Yago Affonso</p>
    </footer>
    </body>

</html>
