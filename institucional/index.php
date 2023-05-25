<?php
    // chamada de inclusão do arquivo de conexão com o bd.
    include("./configuration/connection.php");
    
    //chamada para o arquivo que verifica se o usuario está logado
    include("./configuration/connection.php");

 ?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Institucional</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .mapa {
      width: 100%;
    }

    .img-rd {
      width: 85%;
    }

    .container-fixed {
      position: fixed;
      right: 10px;
      bottom: 10px;
      display: flex;
      flex-direction: column;
      width: 5%;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      background-color: #85AD7D;
    }

    .item-menu {
      display: flex;
    }


    .container-fixed>img {
      width: 50%;
    }
  </style>

  <!-- Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk&display=swap" rel="stylesheet">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <section class="container-fixed">
    <button type="button" class="btn btn-outline-light"> <a target="_blank"
        href="https://wa.me/<?php print($contato["celular"])?>?text=Desejo+Saber+Mais"><img class="img-fixed"
          src="../institucional/image/whatsapp-logo.svg" alt="whatsapp logo"></a></button>
  </section>

  
  <!----------------------Menu------------------------>
  <nav class="nav">
    <section class="container py-3 nav">
      <div class="item-menu">
        <img class="text-uppercase navba r-brand text-light" src="../institucional/image/logo.svg" alt="logo da marca">
      </div>
      <div class="item-menu">
        <a class="nav-link text-light" href="#sobre-nos">Sobre Nós</a>
        <a class="nav-link text-light" href="#produto">Produtos</a>
        <a class="nav-link text-light" href="#localizacao">Localização</a>
        <a class="nav-link text-light" href="#contato">Contato</a>
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Entrar
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="../institucional/login/form-login.php">Login</a></li>
          </ul>
        </li>
      </div>

  </nav>

  <!----------------------Titulo da pagina------------------------>
  <section class="container py-5">
    <div class="row justify-content-center">
      <div class="text-center">
        <h1 class="h1">Nossa Pagina institucional</h2>
      </div>

      <hr class="border border-ligth border-2 opacity-50">

  <!----------------------Carrossel da pagina------------------------>
      <div class="text-center">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="../institucional/image/imagem.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="../institucional/image/imagem2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../institucional/image/imagem3.png" class="d-block w-100" alt="...">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="text-justify mt-5">
        <p>
          O objetivo de um website institucional é apresentar informações sobre a organização, sua história, sua missão,
          visão e valores.
          Deve apresentar também os produtos ou serviços oferecidos, com informações detalhadas sobre cada um. Assim
          como disponibilizar
          informações de contato, como telefone, e-mail e endereço, para que os clientes possam entrar em contato com a
          organização.
        </p>
      </div>

      <!----------------------Produtos------------------------>
      <div class="text-justify mt-5">
        <div class="text-center">
          <h2 id="produto">Produtos</h2>
        </div>
      </div>

      <?php
      //Chamada de inclusão do arquivo de conexão com o BD.
      include("../configuration/connection.php");

      //Instrução SQL de seleção dos usuários.
      $SQLProduto = "SELECT imagem_produto, titulo, descricao, preco FROM produto WHERE ativo = 1;";

      //Executa a consulta SQL.
      $consultaProduto = mysqli_query($connect, $SQLProduto);

      //Verifica se existem retornos na consulta SQL.
      if (mysqli_num_rows($consultaProduto) > 0){

      //Laço de repetição dos usuários. Apresenta todos os Produtos do Banco de dados.
      while ($produto = mysqli_fetch_assoc($consultaProduto)){
          ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php print($produto["imagem_produto"]) ?>" class="card-img-top" alt="Imagem do produto">
          <div class="card-body">
            <h5 class="card-title"><?php print($produto["titulo"]) ?></h5>
            <p class="card-text"><?php print($produto["descricao"]) ?></p>
            <p class="card-text">Preço: R$ <?php print($produto["preco"]) ?></p>
          </div>
          <div class="card-footer">
            <a style="background-color: #AE966C;" class="btn"
              href="https://wa.me/<?php print($contato["celular"])?>?text=ola,+desejo+mais+informações+desse+produto">Saiba
              Mais</a>
          </div>
        </div>
      </div>
      <?php
              }
                        
          //Fecha a conexâo com o BD.
          mysqli_close($connect);

          }else{
          //Retorna a mensagem para o usuário.
          print("Não existem produtos cadastrados no banco de dados.");

          //Fecha a conexão com o BD.
          mysqli_close($connect);
            }
        ?>

      <hr class="m-5">

      <!----------------------Contato------------------------>
      <?php 
  //Instrução SQL de seleção dos usuários.
  $SQLContato = "SELECT celular, email, facebook, instagram FROM contato WHERE ativo = 1;";

  //Executa a consulta SQL.
  $consultaContato = mysqli_query($connect, $SQLContato);

  //Verifica se existem retornos na consulta SQL.
  if (mysqli_num_rows($consultaContato) > 0){
    //Laço de repetição dos usuários. Apresenta todos os usuários do BD
    $contato = mysqli_fetch_assoc($consultaContato)
      ?>

      <div class="m-5 p-2 container-contato border justify-content-center">
        <h2 id="contato" class="text-center">Entre em Contato</h2>
        <p class="text-center">Gostou de um de nossos produtos? entre em contato para mais informações ou nos siga para
          saber mais nas redes sociais</p>
        <div class="container text-center">
          <button type="button" class="btn btn-light btn-lg"> <a target="_blank"
              href="https://wa.me/<?php print($contato["celular"])?>?text=Desejo+Saber+Mais"><img class="img-rd"
                src="../institucional/image/whatsapp-logo.svg" alt="whatsapp logo"></a></button>
          <button type="button" class="btn btn-light btn-lg"> <a target="_blank"
              href="<?php print($contato["facebook"]) ?>"><img class="img-rd"
                src="../institucional/image/facebook-logo.svg" alt="facebook logo"></a></button>
          <button type="button" class="btn btn-light btn-lg"> <a target="_blank"
              href="<?php print($contato["instagram"]) ?>"><img class="img-rd"
                src="../institucional/image/instagram-logo.svg" alt="email logo"></a></button>
          <button type="button" class="btn btn-light btn-lg"> <a target="_blank"
              href="<?php print($contato["email"]) ?>"><img class="img-rd" src="../institucional/image/gmail-logo.svg"
                alt="email logo"></a></button>
        </div>
      </div>

      <?php
    //Fecha a conexâo com o BD.
    mysqli_close($connect);

  }else{
    //Retorna a mensagem para o usuário.
    print("Não existem contatos cadastrados no banco de dados.");

    //Fecha a conexão com o BD.
    mysqli_close($connect);
  }
  ?>

      <hr class="m-5">

      <!----------------------Sobre------------------------>
      <div class="text-justify mt-5">
        <div class="text-center">
          <h2 id="sobre-nos">Nossa Empresa</h2>
        </div>
      </div>

      <?php 
  //Instrução SQL de seleção dos usuários.
  $SQLSobre = "SELECT nome, foto, historia, missao, visao, valores, objetivo, localizacao FROM sobre WHERE ativo = 1;";

  //Executa a consulta SQL.
  $consultaSobre = mysqli_query($connect, $SQLSobre);

  //Verifica se existem retornos na consulta SQL.
  if (mysqli_num_rows($consultaSobre) > 0){
    //Laço de repetição dos usuários. Apresenta todos os usuários do BD
    $sobre = mysqli_fetch_assoc($consultaSobre)
      ?>
      <div class="card mb-3  border border-0">
        <img src="<?php print($sobre["foto"]);?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">História</h5>
          <p class="card-text"><?php print($sobre["historia"]);?></p>

          <h5 class="card-title">Missão da empresa</h5>
          <p class="card-text"><?php print($sobre["missao"]);?></p>

          <h5 class="card-title">Visão</h5>
          <p class="card-text"><?php print($sobre["visao"]);?></p>

          <h5 class="card-title">Valores</h5>
          <p class="card-text"><?php print($sobre["valores"]);?></p>

          <h5 class="card-title">Objetivo</h5>
          <p class="card-text"><?php print($sobre["objetivo"]);?></p>

        </div>
      </div>
      <!----------------------Localização------------------------>
      <div class="mapa-container text-center">
        <h2 id="localizacao" class="text-center">Localização</h2>
        <iframe class="mapa" src="<?php print($sobre["localizacao"]);?>" width="600" height="450" style="border:0;"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
          <a class="btn btn-danger" href="<?php print($sobre["localizacao"]);?>">Ver rotas</a>
        </div>
      </div>
      <?php
    //Fecha a conexâo com o BD.
    mysqli_close($connect);

  }else{
    //Retorna a mensagem para o usuário.
    print("Não existem informações cadastrados sobre no banco de dados.");

    //Fecha a conexão com o BD.
    mysqli_close($connect);
  }
  ?>
  </section>

  <!----------------------Footer------------------------>
  <footer class="footer" style="background-color: #85AD7D;">
    <section class="container py-5">
      <div class="container text-center">
        <div class="row">
          <div class="col bg-transparent">

            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h2 text-light">Contato</p>
              </li>
              <li class="list-group-item" style="background-color:#85AD7D;">
                <p class="h6 text-light"><a
                    href="https://wa.me/<?php print($contato["celular"])?>?text=Desejo+Saber+Mais">Whatsapp</a></p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light"><a href="<?php print($contato["facebook"])?>">Facebook</a></p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light"><a href="<?php print($contato["instagram"])?>">Instagram</a></p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light"><a href="<?php print($contato["email"])?>">E-mail</a></p>
              </li>
            </ul>

          </div>
          <div class="col bg-transparent">

            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:#85AD7D;">
                <p class="h2 text-light">Sobre a empresa</p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light">Sobre nós</p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light">Produtos</p>
              </li>
              <li class="list-group-item" style="background-color: #85AD7D;">
                <p class="h6 text-light">Localização</p>
              </li>

            </ul>

          </div>

        </div>
      </div>
    </section>
  </footer>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>