<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel primi passi</title>
</head>
<body>
  <h2>
    Ecco le nostre torte:
  </h2>

  <ul>
  @foreach ($cake as $item)
    <li>
      {{$item}}
    </li>
    @endforeach
  </ul>

  <a href="{{ route("home") }}"> Indietro </a>
  
</body>
</html>