<?php
    //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

include("../../configuration/connection.php");

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
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Edição de contato</title>
</head>

<body>
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

  <!-- Seção que apresentará a mensagem para o usuário -->
  <section class="container py-5 text-center">
    <?php
        //Verifica se existe alguma mensagem de retorno.
        if(isset($_SESSION['retorno'])){

          //Apresenta a mensagem de retorno para o usuário.
          print($_SESSION['retorno']);

          //Deleta a variável de sessão.
          unset($_SESSION['retorno']);
        }else{

          //Apresenta uma mensagem.
          print("Preencha com as informações do novo contato...");

        }
      ?>
  </section>

  <section class="container py-5 text-center">
    <form action="proccess-contato.php" method="post" class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
      <!--Edição de contatos-->
      <fieldset class="m-5 border-secondary-subtle">
        <h2>Contato</h2>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Celular</label>
          <input type="tel" class="input-txt form-control" id="celular" name="celular" placeholder="Ex: (14)981228218" maxlength="11" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Email</label>
          <input type="text" class="input-txt form-control" id="email" name="email" placeholder="Ex: user@gmail.com" maxlength="255" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Facebook</label>
          <input type="text" class="input-txt form-control" id="facebook" name="facebook" placeholder="Ex: https://facebook.com.br" maxlength="255" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Instagram</label>
          <input type="text" class="input-txt form-control" id="instagram" name="instagram" placeholder="Ex: https://Instagram.com.br" maxlength="255" required>
        </div>
      </fieldset>

      <div class="container text-center">
        <div class="row">
          <div class="col">

          </div>
          <div class="col">
            <button type="button" class="btn btn-light"> <a href="../dashboard.php"> Voltar</a></button>
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
          <div class="col">

          </div>
        </div>
      </div>
    </form>
  </section>



</body>

</html>