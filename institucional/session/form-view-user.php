<?php
    // chamada de inclusão do arquivo de conexão com o bd.
    include("../configuration/connection.php");
    
    //chamada para o arquivo que verifica se o usuario está logado
    include("../configuration/user-session.php");

    // recupera a id do usuario
    $id = $_GET["id"];

    //instrução SQL que puxa os dados do usuario.
    $SQL = " SELECT nome, cpf, data_nascimento, cep,
                    endereco, codigo_area, numero_celular, email
             FROM   usuario
             WHERE  id = $id;";

    //Executa a instução SQL.
    $consulta = mysqli_query($connect, $SQL);

    // Criar uma array para exibir as informações do usuario
    $usuario = mysqli_fetch_assoc($consulta);


?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>informações do usuario</title>
    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg bg-danger" style="background-color: #6043B5;">
        <div class="container-fluid">
          <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <div class="navbar-nav">
            <a class="nav-link text-light" href="user/form-create.php">Cadastro</a>
              <a class="nav-link text-light" href="login/form-login.php">Login</a>
              <a class="nav-link text-light" href="login/form-login.php">Sobre Nós</a>
              <a class="nav-link text-light" href="login/form-login.php">Produtos</a>
              <a class="nav-link text-light" href="login/form-login.php">Serviços</a>
              <a class="nav-link text-light" href="login/form-login.php">Contato</a>
            </div>
          
        </div>
    </nav>

    <!-- Seção do formulário -->
    <section class="container py-5">
        <div class="row justify-content-center">

            <form  class="row">

                <!-- ID Nome e CPF -->
                <div class="row">
                    <div class="col-2 my-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php print($id);?>" readonly>
                    </div>
                    <div class="col-5 my-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php print($usuario["nome"]);?>" readonly>
                    </div>
                    <div class="col-5 my-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php print($usuario["cpf"]);?>" readonly>
                    </div>
                </div>

                <!-- Data de nascimento, CEP e endereco -->
                <div class="row">
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="data_nascimento" value="<?php print($usuario["data_nascimento"]);?>" readonly>
                    </div>
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Cep</label>
                        <input type="number" class="form-control" id="cep" name="cep" value="<?php print($usuario["cep"]);?>" readonly>
                    </div>
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php print($usuario["endereco"]);?>" readonly>
                    </div>
                </div>

            
                <!-- Estado, código de área e celular -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="codigoArea" class="form-label">Código de Área</label>
                        <input type="number" class="form-control" id="codigo_area" name="codigo_area" value="<?php print($usuario["codigo_area"]);?>" readonly>
                    </div>
                    <div class="col-4 my-3">
                        <label for="celular" class="form-label">Celular com DDD</label>
                        <input type="celular" class="form-control" id="celular" name="numero_celular" value="<?php print($usuario["numero_celular"]);?>"readonly>
                    </div>
                </div>

                <!-- E-mail  -->
                <div class="row">
                    <div class="col-12 my-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php print($usuario["email"]);?>" readonly>
                    </div>
                </div>
                
                <!-- Botão de voltar e de salvar -->
                <div class="row">
                    <div class="col-12 my-3">
                        <a href="dashboard.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
    //encerra a conexão com o banco de dados
    mysqli_close($connect);
?>