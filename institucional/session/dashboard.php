<?php
    //chamada para o arquivo que verifica se o usuario está logado
    include("../configuration/user-session.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina Inicial</title>
  <link rel="stylesheet" href="../style/dashboard.css">
  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
      .help{
        position: fixed;
        margin: 3% 5%;
      }

      .row{
        display: flex;
        flex-wrap: wrap;
      }
      </style>
</head>

<body>

  <!-- Menu do website -->
  <nav class="navbar navbar-expand-lg" style="background-color: #6043B5;">
    <div class="container-fluid">
      <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
      <div class="navbar-nav">
        <a class="nav-link text-light" href="login/form-login.php">Ajuda</a>
        <a class="nav-link text-light" href="login/form-login.php">Sair</a>
      </div>

    </div>
  </nav>
    <img class="help" width="50px" src="../image/help.svg" alt="">
  

  

  <section class="container py-5 text-center">
    <!-- Seção do menu -->
    <div class="container py-5">
      <img src="../image/dashboard-img.svg" width="300px" alt="imagem do logo">
      <p>Seja bem-vindo a nossa página principal, caso necessite de ajuda <a href="ajuda.php">Clique aqui</a></p>
    </div>

    <div class="container text-center border border-secondary-subtle p-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
      <div class="row row-cols-4">
        <div class="col">
          <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Produto
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../session/page/form-product-edit.php">Cadastrar Produtos</a></li>
              <li><a class="dropdown-item" href="../session/page/form-sobre-edit.php">Listar Produtos</a></li>
            </ul>
          </div>
        </div>
        <div class="col">
          <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt"
              href="../session/page/form-sobre-edit.php">Sobre</a></button>
        </div>
        <div class="col">
          <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt"
              href="../session/page/form-contato-edit.php">Contato</a></button>
        </div>
        <div class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Usuários
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="../session/user/form-create.php">Cadastrar Usuário</a></li>
            <li><a class="dropdown-item" href="../session/proccess-list-users.php">Editar Usuários</a></li>
          </ul>
        </div>
      </div>
    </div>

  </section>


  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>