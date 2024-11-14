<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personagens Favoritos</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<x-navbar/>

<section class="container my-5">
    <div class="row justify-content-center">
        @foreach ($characters as $character) 
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="cursor: pointer"> 
            <div class="card h-100">
                <img src="{{ $character->image }}" class="card-img-top" alt="{{ $character->name }}">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">{{ $character->name }}</h5>
                    <div style="margin-top: 10px; color:#A0A0A0;">
                        <span>Última localização: </span><p>{{ $character->location['name'] ?? 'Localização desconhecida' }}</p>
                        <span>Aparição: </span><p>{{ $character->origin['name']  ?? 'Aparição desconhecida' }}</p>
                    </div>
                    <a href="{{ url('/chars/' . $character->id) }}" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</section>


<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Rick and Morty App. Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
