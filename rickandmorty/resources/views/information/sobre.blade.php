<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mim</title>
    <link rel="stylesheet" href="{{ asset('css/style_about.css') }}">
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

    <main class="container py-5">
        <div class="row">
            <!-- Foto e Descrição -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/eu.png') }}" alt="Sua Foto" class="img-fluid rounded-circle mb-4" style="width: 200px; height: 200px; object-fit: cover;">
                <h2>Olá, sou Leonardo Augusto de Paula</h2>
                <p class="text-muted">Formado em Técnico em informática | Graduado em TGTI</p>
            </div>

            <!-- Sobre Mim -->
            <div class="col-md-8">
                <section class="about-me">
                    <h3>Sobre Mim</h3>
                    <p>Profissional experiente em análise de sistemas com mais de 5 anos de atuação na área, com 2+ anos focado em integração de sistemas ERP para grandes empresas. Possui histórico de sucesso em projetos com gigantes como Heineken Brasil e Solar(Coca-cola Brasil), demonstrando expertise em gerenciar e entregar projetos dentro do prazo e do orçamento. Especialista em integração com diversos sistemas ERP e E-Commerce, com profundo conhecimento de metodologias de análise e mapeamento de processos. Habilidade em criar documentação técnica clara e concisa, trabalhar de forma indepe
                </section>

                <!-- Redes Sociais -->
                <section class="social-links">
                    <h3>Conecte-se comigo</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://www.linkedin.com/in/leonardo-augusto-de-paula-ba6847161/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/LeonardoAugusto117" target="_blank">GitHub</a></li>
                    </ul>
                </section>

                <!-- Certificados -->
                <section class="certifications">
                    <h3>Certificados</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://drive.google.com/drive/folders/1Hk9Spr6UTAsWMHmR9xoaiup_RlbGW2ta?usp=drive_link" target="_blank">Certificados</a></li>
                    </ul>
                </section>

                <!-- Meus Projetos -->
                <section class="projects">
                    <h3>Meus Projetos no GitHub</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://github.com/LeonardoAugusto117/Ping_Pong-project-1" target="_blank">Projeto 1</a> - Ping_Pong-project-1.</li>
                        <li><a href="https://github.com/LeonardoAugusto117/Jogo-de-Azar" target="_blank">Projeto 2</a> - Jogo-de-Azar.</li>
                        <li><a href="https://github.com/LeonardoAugusto117/CatalogoRickyAndMorty" target="_blank">Projeto 3</a> - CatalogoRickyAndMorty.</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    
</body>
</html>
