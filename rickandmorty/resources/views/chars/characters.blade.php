<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style_char.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<x-navbar/>

    <section class="container">
        <div class="container-quadrado">
            <div class="row">
                <div class="col-image">
                    <img src="{{ $character['image'] }}" class="card-img-top rounded-circle"
                        alt="{{ $character['name'] }}">
                </div>
                <div class="col-data">
                    <div class="data-item">
                        <h4>Nome do Personagem</h4>
                        <p>{{ $character['name'] }}</p>
                    </div>
                    <div class="data-item">
                        <h4>Status</h4>
                        <p class="status-{{ strtolower($character['status']) }}">{{ $character['status'] }}</p>
                    </div>
                    <div class="data-item">
                        <h4>Espécie</h4>
                        <p>{{ $character['species'] }}</p>
                    </div>
                    <div class="data-item">
                        <h4>Gênero</h4>
                        <p>{{ $character['gender'] }}</p>
                    </div>
                </div>

            </div>
            @auth
            <form action="{{ route('saveCharacter', $character['id']) }}" method="POST">
                @csrf
                <div class="actions">
                    <button type="submit" class="btn btn-primary btn-save mt-2">Favoritar</button>
                </div>
            </form>
            @else
            @endauth

        </div>



    </section>

</body>

</html>
