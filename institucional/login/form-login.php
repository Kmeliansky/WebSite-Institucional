<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/login.css">
    <title>Login</title>
    <style>
      .row{
        display: flex;
        align-items: center;
        width: 100%;
      }
      form{
        width: 100%;
      }
    </style>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg " style="background-color: #6043B5;">
        <div class="container-fluid">
          <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
  
            <div class="navbar-nav">
              <a class="nav-link text-light" href="#sobre-nos">Ajuda</a>
            </div>
        </div>
    </nav>

    <?php
      //Recupera a variavel via metodo GET.
      $retorno = $_GET["retorno"];

      //Verifica a variavel possui valor e a apresenta.
      if(isset($retorno)){
          
          //Apresenta a mensagem usando o print.
          print('

          <div class="container justify-content-center mt-5">
            <div class="alert alert-warning text-center" role="alert">
              ' . $retorno . '
            </div>
          </div>
          
          ');
        
      }
    ?>

    <!-- Seção do formulário -->
    <section class="container  py-5">

    <div class="container-fluid container text-center  border shadow-sm p-3 mb-5 bg-body-tertiary rounded">
       <div class="row">
          <div class="col">
              <div class="row justify-content-center">
                  <form action="process-login.php" method="post" class="border rounded p-3 col-4 ">
                    
                    <!-- E-mail -->
                    <div class="mb-3">
                      <label for="email" class="form-label ">E-mail</label>
                      <input type="email" class="form-control " id="email" name="email">
                    </div>

                    <!-- Senha -->
                    <div class="mb-3">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" class="form-control" id="senha" name="senha">
                    </div>

                    <!-- Lembrar-me -->
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
                      <label class="form-check-label" for="lembrar">Lembrar-me</label>
                    </div>

                    <button type="submit" class="btn btn-success">Entrar</button>
                  </form>
              </div>
           </div>
         <div class="col">
            <img src="../image/banner-login.svg" alt="">
           </div>
      </div>
   </div>
  </section>

  <footer class="text-center">
    <p>Projeto de conclusão de curso - 2023 - Todos os direitos reservados</p>
  </footer>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>