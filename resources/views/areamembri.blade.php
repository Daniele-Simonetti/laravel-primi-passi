<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>
    <ul style="display: flex; justify-content:space-around">
      <li><a href="{{ route('contact') }}">Contatti</a></li>
      <li><a href="{{ route('news') }}">News</a></li>
      <li><a href="{{ route('members') }}">Area Membri</a></li>
      <li><a href="{{ route('home') }}">Home</a></li>
    </ul>
  </header>
  <main style="text-align: center">
    <h1 style="color: red;">AREA MEMBRI</h1>
  </main>
  
</body>
</html>