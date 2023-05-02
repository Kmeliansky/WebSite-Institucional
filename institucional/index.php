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
    <title>Institucional</title>
  
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk&display=swap" rel="stylesheet">

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="../institucional/style/index.css">

  </head>
  <body>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg " style="background-color: #6043B5;">
        <div class="container-fluid">
          <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="navbar-nav">
              <a class="nav-link text-light" href="#sobre-nos">Sobre Nós</a>
              <a class="nav-link text-light" href="#produto">Produtos</a>
              <a class="nav-link text-light" href="#servico">Serviços</a>
              <a class="nav-link text-light" href="login/form-login.php">Contato</a>
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Entrar
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="../institucional/login/form-login.php">Login</a></li>
                  <li><a class="dropdown-item" href="../institucional/user/form-create.php">Cadastrar</a></li>
                </ul>
                </li>
            </div>
        </div>
    </nav>

    <!-- Seção de titulo -->
    <section class="container py-5">
      <div class="row justify-content-center">
        <div class="text-center">
          <h1 class="h1">Insira a sua empresa no mercado digital :)</h2>
        </div>

        <hr class="border border-ligth border-2 opacity-50">

    <!--sessao do carrossel-->
        <div class="text-center">
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="../institucional/image/banner-principal.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../institucional/image/banner-secundaria.jpg" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="../institucional/image/banner-terceirario.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>

        <div class="text-justify mt-5">
          <p>
           O objetivo de um website institucional é apresentar informações sobre a organização, sua história, sua missão, visão e valores.
            Deve apresentar também os produtos ou serviços oferecidos, com informações detalhadas sobre cada um. Assim como disponibilizar 
            informações de contato, como telefone, e-mail e endereço, para que os clientes possam entrar em contato com a organização.
          </p>
        </div>

    <!--sessao de produtos-->
    <div class="text-justify mt-5">
          <div class="text-center">
          <h2 id="produto">Produtos</h2>
          </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
</div>

    
<!--sessao de serviços-->

<div class="text-justify mt-5">
          <div class="text-center">
          <h2 id="servico">Serviços</h2>
          </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.dinamize.com.br/wp-content/uploads/2020/09/marketing-de-produto-thumb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">[Titulo]</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
</div>

<!--sessao de sobre-->

<div class="text-justify mt-5">
          <div class="text-center">
          <h2 id="sobre-nos">Nossa Empresa</h2>
          </div>
    </div>

<div class="card mb-3 border border-0">
  <img src="https://cdn-landing.arquivei.com.br/blog/wp-content/uploads/2017/09/tipos-empresas-1200_og.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sobre</h5>
    <p class="card-text">Descrição sobre a empresa</p>
  
    <h5 class="card-title">Valores e missão da empresa</h5>
    <p class="card-text">Descrição sobre a empresa</p>

    <h5 class="card-title">Área de atuação</h5>
    <p class="card-text">Descrição sobre a a area da empresa</p>
    
  </div>
</div>

</section>

  <!--sessao do footer-->
  <footer class="footer" style="background-color: #6043B5;">
  <section class="container py-5">
  <div class="container text-center">
  <div class="row">
    <div class="col bg-transparent"> 

    <ul class="list-group list-group-flush">
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h2 text-light">Institucional</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Sobre a empresa</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
    </ul>

    </div>
    <div class="col bg-transparent">
      
    <ul class="list-group list-group-flush">
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h2 text-light">Sobre a empresa</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
    </ul>

    </div>
    <div class="col bg-transparent">
      
    <ul class="list-group list-group-flush">
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h2 text-light">Institucional</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">opcao</p>
      </li>
    </ul>

    </div>
  </div>
</div>
  </section>
  </footer>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>