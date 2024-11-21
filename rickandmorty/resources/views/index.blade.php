<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    
    <x-navbar/>

    <section class="container my-5">

        <form class="search-form" method="GET" action="{{ url('/') }}">
            <input type="search" class="search-input" name="query" placeholder="Pesquisar" aria-label="Pesquisar" value="{{ request()->input('query') }}">
            <button type="submit" class="search-button">Pesquisar</button>
        </form>
        
        <div class="row justify-content-center">
            @foreach ($characters as $character)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="cursor: pointer">
                    <div class="card h-100">
                        <img src="{{ $character['image'] }}" class="card-img-top" alt="{{ $character['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 28px;">{{ $character['name'] }}</h5>
                            <div style="margin-top: 10px; color:#A0A0A0;">
                                <span>Última localização: </span><p>{{ $character['location']['name'] }}</p>
                                <span>Aparição: </span><p>{{ $character['origin']['name'] }}</p>
                            </div>
                            <a href="{{ url('/chars/' . $character['id']) }}" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Botão de Subir -->
    <button id="scrollToTopBtn" class="btn btn-primary" >
        <i class="bi bi-arrow-up-circle-fill" id="icon"></i>
    </button>

   
    

    <!-- Script de Carregamento Infinito -->
    <script>
        let page = 1;
        let loading = false;

        window.onscroll = function() {
            // Verifique se o usuário chegou ao final da página
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 100 && !loading) {
                loading = true;
                page++;

                // Faça uma requisição AJAX para carregar mais personagens
                fetch(`/load-more-characters?page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            // Adicione os novos personagens à página
                            const row = document.querySelector('.row');
                            data.forEach(character => {
                                const col = document.createElement('div');
                                col.classList.add('col-12', 'col-sm-6', 'col-md-4', 'col-lg-3', 'mb-4');
                                col.style.cursor = 'pointer';

                                col.innerHTML = `
                                    <div class="card h-100">
                                        <img src="${character.image}" class="card-img-top" alt="${character.name}">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 28px;">${character.name}</h5>
                                            <div style="margin-top: 10px; color:#A0A0A0;">
                                                <span>Última localização: </span><p>${character.location.name}</p>
                                                <span>Aparição: </span><p>${character.origin.name}</p>
                                            </div>
                                            <a href="/chars/${character.id}" class="btn btn-primary">Ver mais</a>
                                        </div>
                                    </div>
                                `;
                                row.appendChild(col);
                            });

                            loading = false; // Permitir mais carregamento
                        }
                    })
                    .catch(error => {
                        console.error('Erro ao carregar mais personagens:', error);
                        loading = false; // Permitir tentar novamente em caso de erro
                    });
            }

            // Exibe ou esconde o botão de subir
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        // Função para rolar para o topo
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");
        scrollToTopBtn.onclick = function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Rick and Morty App. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
