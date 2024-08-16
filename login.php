<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moda Country</title>
  <link rel="stylesheet" href="acess/css/login.css">
  <style>

    .inputSubmit {
  padding: 10px 20px;
  background-color: #118435;
  color: white;
  border: none;
  border-radius: 8px;
  align-self: center;
}

.inputSubmit:hover {
  background-color: #555;
  cursor: pointer;
}

  </style>
</head>

<body>

  <header>
    <div class="logo">
      <img src="imagens/logo.png" alt="Logo">
    </div>
    <h1>Moda Country</h1>
    <nav>
      <ul>
        <li><a href="index.html">Página Inicial</a></li>
        <li><a href="produto.html">Produtos</a></li>
        <li><a href="sobre-nos.html">Sobre Nós</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>

      <div class="icon-container">
        <div class="container">
        <a href="home.php">Voltar</a>
        <a href="carrinho.html">
        <img width="45" height="45" src="https://img.icons8.com/pastel-glyph/50/shopping-trolley--v2.png" alt="shopping-trolley--v2"/>
        </a>
        <a href="favorito.html">
        <img width="45" height="45" src="https://img.icons8.com/ios/50/country-music.png" alt="country-music"/>       <i class="fi fi-rr-user"></i> 
        </a>
        <a href="login.php">   
        <img width="45" height="45" src="https://img.icons8.com/parakeet-line/50/test-account.png" alt="test-account"/>
        </a>
      </div>
      </div>   
    </nav>
  </header>
    
  
  
  <div class="content">
    <section id="contato">
      <h2>Login</h2>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
    </section>
  </div>

  <br>
  <a href="formulario.php">
    <p>Cadastre-se agora</p>
  </a>

  <br>
    <footer class="footer">
      <p>&copy;Meu de Vendas 2024</p>
      <p>Power by Moda country</p>
    </footer>
</body>
</html>