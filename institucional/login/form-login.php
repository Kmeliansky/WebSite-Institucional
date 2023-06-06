<?php
    // chamada de inclusão do arquivo de conexão com o bd.
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
  <title><?php print($sobre["nome"])?></title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk&display=swap" rel="stylesheet">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <h3 class="text-center">Projeto de Conclusão de Curso - SENAI Botucatu</h3>

  <!----------------------Menu------------------------>
  <nav class="nave d-flex align-items-center" style="background-color:<?php print($sobre["cor_primaria"]) ?>;">
    <section class="container py-3 nav d-flex align-items-center">
      <div class="item-menu">
        <img class="" src="<?php print($imagemLogo); ?>" alt="Imagem do Produto" width="70px">
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
            <div class="alert alert-danger text-center" role="alert">
              ' . $retorno . '
            </div>
          </div>
          
          ');
      }
    ?>


  <section class="d-flex justify-content-center py-5">
          <form action="process-login.php" method="post" class="border rounded p-3 col-4 ">

        <!-- E-mail -->
        <div class="mb-5">
          <label for="email" class="form-label ">E-mail</label>
          <input type="email" class="form-control " id="email" name="email">
        </div>

        <!-- Senha -->
        <div class="mb-5">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <!-- Lembrar-me -->
        <div class="mb-5 form-check">
          <input type="checkbox" class="form-check-input" id="lembrar" name="lembrar">
          <label class="form-check-label" for="lembrar">Lembrar-me</label>
        </div>

        <button type="submit" class="btn btn-success">Entrar</button>
        </form>
  </section>

  
  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>