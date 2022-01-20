<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel primi passi</title>
</head>
<body>

  <h3>
    Chi siamo e come trovarci:
  </h3>
  <div>
    <p> Noi siamo: {{$weAre}} </p>
    <p> Telefono: {{$phone}} </p>
    <p> Email: {{$email}} </p>
    <p> Ci troviamo in {{$location}} </p>
    <p> Nella località di: {{$city}} </p>
  </div>

  <a href="{{ route("home") }}"> Indietro </a>
  
</body>
</html>