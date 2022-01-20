<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>laravel primi passi</title>
</head>
<body>
  <ul class="nav d-flex justify-content-center mt-4">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route("home") }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route("about") }}">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route("contacts") }}">Contatti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route("cake") }}"> Le nostre torte</a>
    </li>
  </ul>

  <h1 class="d-flex justify-content-center m-5">
    Hello World
  </h1>
  
</body>
</html>