# CatalogoRickyAndMort
Projeto Laravel - [CatalogoRickyAndMort]

Descrição
=======

Este projeto é uma aplicação web desenvolvida em Laravel que inclui funcionalidades como autenticação de usuário, gerenciamento de personagens, e uma interface de navegação elegante. Ele também suporta a exibição de informações do usuário e integração com APIs.

Tecnologias Utilizadas:

* PHP 8.x
* Laravel 10.x
* SQLite
* Bwootstrap 5.x 
* JavaScript 

Funcionalidades:

* Registro e login de usuários com autenticação.
* Gerenciamento de personagens (exibição, edição e exclusão).
* Página de informações (sobre mim) com links para redes sociais e projetos.
* Navegação responsiva com exibição condicional baseada na autenticação do usuário.

Setup do Projeto:

* Pré-requisitos
* PHP 8.x ou superior
* Composer para gerenciar dependências do Laravel
* SQLite 
* Visual-Code (para compilação de ativos front-end)
* Breez para autenticação de login


Passso a passo para Instalação
=======
1- git clone:
=======
* git@github.com:LeonardoAugusto117/CartalogoRickyAndMorty.git
  
2-Instale as Dependências do Projeto
=======
*Descrição*

Este projeto é uma aplicação web desenvolvida em Laravel que inclui funcionalidades como autenticação de usuário, gerenciamento de personagens, e uma interface de navegação elegante. Ele também suporta a exibição de informações do usuário e integração com APIs.

*Tecnologias Utilizadas:*

* PHP 8.x
* Laravel 10.x
* MySQL 
* Bootstrap 5.x (para o front-end)
* Autenticador de usuário Breez

*Funcionalidades:*

* Registro e login de usuários com autenticação.
* Gerenciamento de personagens (exibição, edição e exclusão).
* Página de informações (sobre mim) com links para redes sociais e projetos.
* Navegação responsiva com exibição condicional baseada na autenticação do usuário.

*Setup do Projeto:*

* Pré-requisitos
* PHP 8.x ou superior
* Composer para gerenciar dependências do Laravel
* SQLite 
* Visual-Code (para compilação de ativos front-end)

*Passos para Instalação*

*1- git clone git@github.com:LeonardoAugusto117/CartalogoRickyAndMorty.git*

*2-Instale as Dependências do Projeto*

* Instalar composer pelo slink: https://getcomposer.org depois -> Acessar a pasta /rickandmorty, abrir o CMD na barra e executar o seguinte comando: composer install e depois composer upgrade.
* Instalar PHP
* copy .env.example .env (criar o arquiv .env)
* para criar chaves php artisan key:generate



3- Criando o banco: database.sqlite
=======
*3- Criando o banco: database.sqlite*

* Acesse o diretório: ?:\dev\php\CatalogoRickyAndMorty\rickandmorty\database pelo visual estudio, e criei o arquivo: database.sqlite

* Abra o arquivo: .env e configure o banco:

DB_CONNECTION=sqlite
DB_DATABASE=diretorio do banco


4- Gere a Chave de Aplicação
=======
*4- Gere a Chave de Aplicação*

* php artisan key:generate

5- Subir as tabelas no laravel:
=======
* php artisan migrate

6- Inicie o Servidor Local
=======
*5- Subir as tabelas no laravel:*

* php artisan migrate

*6- Inicie o Servidor Local*
=======

* php artisan serve
* O projeto estará disponível em http://localhost:8000.


Estrutura do Projeto:

Models: 
=======
*Estrutura do Projeto:*

_Models:_


* Contém os modelos da aplicação, como Usuario para gerenciamento de usuários.
Controllers: 
* Lógica de controle, como LoginController para autenticação.
Views: 
* Arquivos de front-end em Blade para renderizar as páginas da aplicação.
Routes: 
* Definições de rotas, disponíveis em routes/web.php.




O projeto utiliza o sistema de autenticação padrão do Laravel. Para acessar as rotas protegidas, o usuário precisa estar autenticado.
=======
* O projeto utiliza o sistema de autenticação padrão do Laravel. Para acessar as rotas protegidas, o usuário precisa estar autenticado.


* Formulário de Login: views/acess/login.blade.php
* Formulário de Registro: views/registers/register.blade.php
* Configuração de Segurança




Problemas Comuns:
=======
*Problemas Comuns:*


* Erro de Conexão com o Banco de Dados:
* Verifique as credenciais de banco de dados no arquivo .env.
* Falha ao Executar as Migrações:
* Certifique-se de que o banco de dados está criado e acessível.
* Problemas com Autenticação:
* Verifique se a tabela usuarios está corretamente configurada e que os guards de autenticação estão definidos.


Contato:
Autor: Leonardo Augusto de Paula
=======
*Contato:*

* Autor: Leonardo Augusto de Paula
* Email: leonardodepaula2999@gmail.com
* LinkedIn: https://www.linkedin.com/in/leonardo-augusto-de-paula-ba6847161/
* GitHub: https://github.com/LeonardoAugusto117


Sinta-se à vontade para personalizar o README com mais detalhes específicos do seu projeto!


