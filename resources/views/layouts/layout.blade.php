<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>СпортНовости</title>

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- styles -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    </head>
<body>
    <header style="background-color: black;"> <!-- цвет не меняется -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/about">О нас</a> <!-- было nav-link active -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">Новости</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/events">Мероприятия</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
 @yield('content')   
</body>
</html>
