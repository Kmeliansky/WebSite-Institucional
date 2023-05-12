<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Institucional</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      .fixed-top{
        
        display: flex;
        flex-direction: column;
        width: 5%;
        margin: 30vh 1%;
        height: 25%;
      }
      .fixed-top > img{
        width: 50%;
        margin: 5% auto;
      }
      .mapa{
        width: 100%;
      }
    </style>
  
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk&display=swap" rel="stylesheet">

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>

  <section class="fixed-top border shadow p-3 mb-5 bg-body-tertiary rounded">
    <img src="../institucional/image/whatsapp.svg" alt="whatsapp logo">
    <img src="../institucional/image/facebook.svg" alt="facebook logo">
    <img src="../institucional/image/instagram.svg" alt="instagram logo">
    <img src="../institucional/image/email.svg" alt="email logo">
  </section>

    <!-- Menu do website -->
    <nav class="nav">
    <section class="container py-3 nav">
        <div class="item-menu">
          <img class="text-uppercase navba r-brand text-light" src="../institucional/image/logo.svg"
            alt="logo da marca">
        </div>
        <div class="item-menu">
          <a class="nav-link text-light" href="#sobre-nos">Sobre Nós</a>
          <a class="nav-link text-light" href="#produto">Produtos</a>
          <a class="nav-link text-light" href="#localizacao">Localização</a>
          <a class="nav-link text-light" href="login/form-login.php">Contato</a>
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
    

    <!--

<div class="navbar-nav">
              <a class="nav-link text-light" href="#sobre-nos">Sobre Nós</a>
              <a class="nav-link text-light" href="#produto">Produtos</a>
              <a class="nav-link text-light" href="#localizacao">Localização</a>
              <a class="nav-link text-light" href="login/form-login.php">Contato</a>
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Entrar
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="../institucional/login/form-login.php">Login</a></li>
                </ul>
                </li>
            </div>

     -->

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
            <img src="../institucional/image/imagem.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../institucional/image/imagem2.png" class="d-block w-100" alt="..."> 
          </div>
          <div class="carousel-item">
            <img src="../institucional/image/imagem3.png" class="d-block w-100" alt="...">
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
        <h5 class="card-title">Mostre sua historia</h5>
        <p class="card-text"> Crie conexões com seu publico mostrando sua historia para quem quiser ver.</p>
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
        <h5 class="card-title">Mostre seus valores</h5>
        <p class="card-text">Deixe claro seu posicionamento no mercado atraves de nossa pagina e aumente seus clientes.</p>
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
        <h5 class="card-title">Seja visto</h5>
        <p class="card-text">Disponibilize na sua pagina seus contatos para seus clientes poderem falar com voce.</p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-dark">Saiba mais</button>
      </div>
    </div>
  </div>
</div>


<!--Contato-->
<div class="m-5 container-contato border">
<h2 class="text-center">Entre em Contato!!</h2>
<p class="text-center">Gostou de um de nossos produtos? entre em contato para mais informações ou nos siga para saber mais nas redes sociais</p>
<div class="container text-center">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col">
    <a href="http://"><img width="25%" src="../institucional/image/whatsapp.svg" alt="whatsapp logo"></a>
    </div>
    <div class="col">
    <a href="http://"><img width="25%" src="../institucional/image/facebook.svg" alt="facebook logo"></a>
    </div>
    <div class="col">
    <a href="http://"><img width="25%" src="../institucional/image/instagram.svg" alt="instagram logo"></a>
    </div>
    <div class="col">
    <a href="http://"><img width="25%" src="../institucional/image/email.svg" alt="email logo"></a>
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
    <p class="card-text">Empresas que contam sbre sua historia chamam muito mais a atenção de seus clientes</p>
  
    <h5 class="card-title">Valores e missão da empresa</h5>
    <p class="card-text">Mostre para seu publico sua missao com a empresa e os valores que ela segue</p>

    <h5 class="card-title">Área de atuação</h5>
    <p class="card-text">Conte mais sobre a area em que sua empresa atua, e como ela pode ser a referencia que o mercado precisa</p>
    
  </div>
</div>

  <div class="mapa-container text-center">
    <h2 id="localizacao" class="text-center">Localização</h2>
    <iframe class="mapa"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0865678717855!2d-48.443138223592186!3d-22.910177637994295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c6df00ad9e9761%3A0x82af7313ba02130!2sSENAI%20-%20Botucatu!5e0!3m2!1spt-BR!2sbr!4v1683923481295!5m2!1spt-BR!2sbr"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <a class="btn btn-danger" href="https://goo.gl/maps/K6CKdT8trJPXrivb7">Ver rotas</a>
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
      <p class="h2 text-light">Contato</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Whatsapp</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Facebook</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">instagram</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">E-mail</p>
      </li>
    </ul>

    </div>
    <div class="col bg-transparent">
      
    <ul class="list-group list-group-flush">
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h2 text-light">Sobre a empresa</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Sobre nós</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Produtos</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Localização</p>
      </li>

    </ul>

    </div>
    <div class="col bg-transparent">
      
    <ul class="list-group list-group-flush">
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h2 text-light">Institucional</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">Sobre a empresa</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">História</p>
      </li>
      <li class="list-group-item" style="background-color: #6043B5;">
      <p class="h6 text-light">LGPD</p>
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