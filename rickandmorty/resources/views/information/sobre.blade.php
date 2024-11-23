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
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/eu.png') }}" alt="Sua Foto" class="img-fluid rounded-circle">
                <h2>Leonardo Augusto de Paula</h2>
                <p>Técnico em informática | Graduado em TGTI</p>
            </div>

            <div class="col-md-8">
                <section class="about-me">
                    <h3>Sobre Mim</h3>
                    <p>Sou um profissional experiente em análise de sistemas, com mais de cinco anos de atuação na área, sendo que nos últimos dois anos me especializei em integração de sistemas ERP para grandes empresas. Tive a oportunidade de trabalhar em projetos importantes com empresas como Heineken Brasil e Solar (Coca-Cola Brasil), onde entreguei resultados dentro do prazo e do orçamento.</p>

                    <p>Tenho uma sólida expertise em integração de sistemas ERP e e-commerce, além de um profundo conhecimento em metodologias de análise e mapeamento de processos. Também me destaco pela habilidade de criar documentações técnicas claras e objetivas, o que facilita a comunicação e o entendimento entre as equipes. Sou uma pessoa proativa, que sabe trabalhar de forma independente e buscar soluções práticas para os desafios que surgem.</p>
                </section>

                <section class="social-links">
                    <h3>Conecte-se comigo</h3>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/leonardo-augusto-de-paula-ba6847161/" target="_white">LinkedIn</a></li>
                        <li><a href="https://github.com/LeonardoAugusto117" target="_blank">GitHub</a></li>
                    </ul>
                </section>

                <section class="certifications">
                    <h3>Certificados</h3>
                    <ul>
                        <li><a href="https://drive.google.com/drive/folders/1Hk9Spr6UTAsWMHmR9xoaiup_RlbGW2ta?usp=drive_link" target="_blank">Certificados</a></li>
                    </ul>
                </section>

                <section class="projects">
                    <h3>Meus Projetos no GitHub</h3>
                    <ul>
                        <li><a href="https://github.com/LeonardoAugusto117/Ping_Pong-project-1" target="_blank">Projeto 1</a> - Ping_Pong-project-1.</li>
                        <li><a href="https://github.com/LeonardoAugusto117/Jogo-de-Azar" target="_blank">Projeto 2</a> - Jogo-de-Azar.</li>
                        <li><a href="https://github.com/LeonardoAugusto117/CatalogoRickyAndMorty" target="_blank">Projeto 3</a> - CatalogoRickyAndMorty.</li>
                        <li><a href="https://github.com/LeonardoAugusto117/Pagina__de_contato" target="_blank">Projeto 4</a> - Tela de contato</li>
                    </ul>
                </section>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Rick and Morty App. All rights reserved - v1.0.0.</p>
    </footer>

</body>
</html>
