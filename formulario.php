<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moda Country</title>
  <link rel="stylesheet" href="acess/css/cadastro.css">
</head>

  <div class="logo">
    <img src="imagens/logo.png" alt="Logo">
  </div>

  <header>
    <h1>Moda Country</h1>
    <nav>
      <ul class="nav-list">
        <li><a href="index.html">Página Inicial</a></li>
        <li><a href="produto.html">Produtos</a></li>
        <li><a href="sobre nós.html">Sobre Nós</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
      
      <div class="icon-container">
        <div class="container">
        <a href="sair.php" class="btn btn-danger me-5">Voltar</a>
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
  
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
          <fieldset>
            <br>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class button>
                <input type="submit" name="submit" id="submit" class="botao-estilizado">
                </div>
            </fieldset>
        </form>
    </div>
  


  <br>
    


  <script src="js/scripts.js"></script>

  <footer class="footer">
      <p>&copy;Meu de Vendas 2024</p>
      <p>Power by Moda country</p>
    </footer>
</body>

</html>