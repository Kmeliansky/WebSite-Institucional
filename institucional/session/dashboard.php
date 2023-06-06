<?php
    //chamada para o arquivo que verifica se o usuario está logado
    include("../configuration/user-session.php");
    include("../configuration/connection.php");

    //Instrução SQL de seleção dos dados sobre a empresa.
    $SQLSobre = "SELECT * FROM sobre WHERE ativo = 1;";
          
    //Executa a consulta SQL.
    $consultaSobre = mysqli_query($connect, $SQLSobre);

    //Verifica se existem retornos na consulta SQL.
    if (mysqli_num_rows($consultaSobre) > 0){

      //apresenta todas as informações sobre a empresa
      $sobre = mysqli_fetch_assoc($consultaSobre);
      $imagemSobre = "data:image/jpeg;base64," . base64_encode($sobre['imagem_empresa']);
      $imagemLogo = "data:image/jpeg;base64," . base64_encode($sobre['logo']);
      } else{

      //Retorna a mensagem para o usuário.
      print("Não existem informações cadastradas sobre a empresa no banco de dados.");
      }

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
    .item-menu {
      display: flex;
    }

    .dropbtn {
      background-color: <?php print($sobre["cor_secundaria"]) ?>;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: <?php print($sobre["cor_primaria"]) ?>;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: <?php print($sobre["cor_primaria"]) ?>;
    }

    </style>
</head>

<body>

  <!-- Menu do website -->
    <!----------------------Menu------------------------>
    <nav class="nave d-flex align-items-center" style="background-color:<?php print($sobre["cor_primaria"]) ?>;">
    <section class="container py-3 nav d-flex justify-content-between align-items-center">
      <div class="item-menu">
      <img class="" src="<?php print($imagemLogo); ?>" alt="Imagem do Produto" width="70px">
      </div>
      <div class="item-menu">
        <a class="nav-link text-light btn" href="../session/exit.php" style="background-color:  <?php print($sobre["cor_secundaria"]) ?>; color:#FFFFFF;">Sair</a>
      </div>
    </section>
  </nav>
    
  <section class="container py-5 text-center">
    <!-- Seção do menu -->
    <div class="container py-5">
      <img src="../image/dashboard-img.svg" width="300px" alt="imagem do logo">
      <p>Seja bem-vindo a nossa página principal, caso necessite de ajuda <a href="ajuda.php">Clique aqui</a></p>
    </div>

    <div class="rounded d-flex justify-content-center flex-wrap">
      <div class="row row-cols-4 d-flex justify-content-center flex-wrap">
        <div class="col">
        <div class="dropdown">
            <button class="dropbtn">Produto</button>
            <div class="dropdown-content">
            <a class="dropdown-item" href="../session/produto/form-product-edit.php">Cadastrar Produtos</a>
            <a class="dropdown-item" href="../session/produto/proccess-list-product.php">Listar Produtos</a>
            </div>
          </div>
        </div>
        <div class="col">
          <button type="button" class="dropbtn" width="200px" style="background-color:  <?php print($sobre["cor_secundaria"]) ?>; color:#FFFFFF;"><a class="opt"
              href="../session/sobre/form-sobre-edit.php">Sobre</a></button>
        </div>
        <div class="col">
          <button type="button" class="dropbtn" width="200px" style="background-color:  <?php print($sobre["cor_secundaria"]) ?>; color:#FFFFFF;"><a class="opt"
              href="../session/contato/form-contato-edit.php">Contato</a></button>
        </div>
        <div class="nav-item dropdown">
        <div class="dropdown">
            <button class="dropbtn">Usuários</button>
            <div class="dropdown-content">
            <a class="dropdown-item" href="../session/user/form-create.php">Cadastrar Usuário</a>
            <a class="dropdown-item" href="../session/proccess-list-users.php">Usuários cadastrados</a>
            </div>
          </div>
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