<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- bootstrap -> parte do css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/css/style.css">
    <script src='js/script.js' ></script>

  </head>
  
  <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <header >
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        
      <a href="/" class="navbar-brand">
          <img src="/img/hdcevents_logo.svg" alt="HDC Events">
        </a>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/event/creat" class="nav-link">Criar Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>

    </header>
	
    @yield('content')

    <footer>
      <p>eventos &copy, 2024</p>
    </footer>
  
    <!-- bootstrap -> parte do js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>
