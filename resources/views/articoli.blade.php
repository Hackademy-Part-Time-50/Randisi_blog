<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Articolo</title>

<!-- CDN BootStrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Foglio di Stile Custom  -->
<link rel="stylesheet" href="{{asset('css/app.css') }}"> 
<!-- Percorso assoluto su file CSS -->
</head>

<body>

<!-- NavBar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="#">NavbarSito</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="{{route ('welcome')}}">HomePage</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route ('Articoli')}}">Articoli</a>
</li>
</ul>

</div>
</div>
</nav>


  @if (!$articles)
    <h1>Non ci sono Articoli Disponibili</h1>
  @else  
      @foreach($articles as $articolo)
        <div class="mb-2 shadow-sm p-3 rounded">
          <h2>{{$articolo["title"]}}</h2>
            <div class="mt-2 text-end">
              <h3>{{$articolo["category"]}}</h3>
              <a href="{{route('Articolo', $articolo['id'])}}">Leggi l'articolo Completo</a>
            </div>
        </div>
      @endforeach
  @endif

 

<!-- Script Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>