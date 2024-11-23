<!DOCTYPE html>
<html lang="pt--br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxmum scale=1, user-scalable=1">
    <title>Contato</title>
    <link rel="stylesheet" href="/css/style_contats.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<x-navbar/>

<div id="main-container">
    <!-- Informações de endereço -->
    <div id="address-container">
      <div class="fade"></div>
      <div id="address-content">
        <h2><ion-icon name="navigate-outline"></ion-icon> Endereço</h2>
        <p>Avenida Paulista, 807</p>
        <h2><ion-icon name="call-outline"></ion-icon> Telefone</h2>
        <p>(11)9872-9002</p>
        <h2><ion-icon name="mail-outline"></ion-icon> E-mail</h2>
        <p>leonardo@email.com</p>
      </div>
    </div>
    <!-- Formulário para contato -->
    <div id="form-container">
      <h2>Me Mande uma mensagem!</h2>
      <form id="contact-form">
        <label for="name">Nome:</label>
        <input type="text" name="name" placeholder="Digite seu nome">
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="Digite seu e-mail">
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" placeholder="Digite seu telefone">
        <label for="msg">Sua mensagem:</label>
        <textarea name="msg" placeholder="Como podes te ajudar?"></textarea>
        <input type="submit" value="Enviar mensagem">
      </form>
    </div>
  </div>    
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy;  2024 Rick and Morty App. All rights reserved - v1.0.0.</p>
</footer>

</body>
</body>

</html>
