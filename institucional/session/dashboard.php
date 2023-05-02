<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="../style/dashboard.css">
    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg" style="background-color: #6043B5;">
        <div class="container-fluid">
          <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <div class="navbar-nav">
              <a class="nav-link text-light" href="login/form-login.php">Ajuda</a>
              <a class="nav-link text-light" href="login/form-login.php">Sair</a>
              <a class="nav-link text-light" href="login/form-login.php">Relatar Problema</a>
            </div>
          
        </div>
    </nav>
    
    <section class="container py-5 text-center">
    <!-- Seção do menu -->
    <div class="container py-5">
      <img src="../image/dashboard-img.svg" width="300px" alt="imagem do logo">
      <p>Seja Bem vindo a nossa pagina principal</p>
    </div>
    
        <div class="container text-center border border-secondary-subtle p-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="row row-cols-4">
              <div class="col">
              <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt" href="form-edit-page.php">Edita Página</a></button>
              </div>
              <div class="col">
              <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt" href="form-view-user.php">VIsualizar dados</a></button>
              </div>
              <div class="col">
              <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt" href="form-edit-user.php">Edita dados</a></button>
              </div>
              <div class="col">
              <button type="button" class="btn light border btn-secondary" width="200px"><a class="opt" href="#">Minha Página</a></button>
              </div>
            </div>
      </div>

      </section>


    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>