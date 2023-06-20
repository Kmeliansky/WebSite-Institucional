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

    <title>Edição de Sobre</title>
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
          print("Preencha com as informações sobre a empresa...");

        }
      ?>
    </section>


    <section class="container py-5 text-center">
        <form class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded"
            action="proccess-sobre.php" method="post" enctype="multipart/form-data">
            <!--Edição sobre a empresa-->
            <fieldset class="m-5 border-secondary-subtle">
                <h2>Sobre</h2>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Nome da Empresa</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="nome" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="formFile" class="form-label">Logo da Empresa</label>
                    </div>
                        <input class="form-control" type="file" id="formFile" name="logo">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="formFile" class="form-label">Imagem da Empresa</label>
                    </div>
                        <input class="form-control" type="file" id="formFile" name="imagem">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="formFile" class="form-label">Cor primaria da sua identidade visual</label>
                    </div>
                        <input class="form-control" type="color" id="color" name="cor_primaria">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="formFile" class="form-label">Cor secundaria da sua identidade visual</label>
                    </div>
                        <input class="form-control" type="color" id="color" name="cor_secundaria">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">História</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="historia" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div title="A missão de uma empresa é aquilo que ela determina como a razão de ser do seu negócio, a sua entrega ao cliente. Como a empresa é um ser vivo e mutável, a missão pode ser revista ao longo do tempo, se adequando às novas necessidades do mercado"
                        class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Missão</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="missao" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div title="A visão de uma empresa é onde ele quer chegar em um determinado tempo. É importante ter a visão sempre no horizonte, pois as ações presentes devem estar alinhadas com onde se quer chegar. Ter visão do seu negócio estabelece os parâmetros para a tomada de decisão, para os investimentos e principalmente para a estratégia de negócio que levará a visão."
                        class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Visão</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="visao" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Valores</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="valores" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Objetivo</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="objetivo" required maxlength="500"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Localização</label>
                    </div>
                    <input type="text" class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="localizacao" placeholder="https://goo.gl/maps/K6CKdT8trJPXrivb7" require maxlength="255"/>
                </div>
                </div>
            </fieldset>

            <div class="m-5 text-center">
                <button type="button" class="btn btn-light text-center"> <a href="../dashboard.php"> Voltar</a></button>
                <button type="submit" class="btn btn-success text-center">Salvar</button>
            </div>
        </form>
    </section>



</body>

</html>