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

    <title>Edição de produtos</title>
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
          print("Preencha com as informações do novo produto...");

        }
      ?>
    </section>

    <section class="container py-5 text-center">
        <form class="form border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded" action="proccess-product.php" method="POST" enctype="multipart/form-data">
            <!--Edição dos produtos-->
            <fieldset class="m-5  border-secondary-subtle">
                <h2>Produtos</h2>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="formFile" class="form-label">Imagem do produto</label>
                    </div>
                    <input class="form-control" type="file" id="imagem" name="imagem">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Titulo:</label>
                    </div>
                    <input type="text" class="input-txt form-control" id="exampleFormControlInput1" name="titulo_produto" required maxlength="255">
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3" name="descricao_produto" required maxlength="255"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlTextarea1" class="form-label">Preço</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3" name="valor_produto" required maxlength="255"></textarea>
                </div>
            </fieldset>

            <div class="text-center m-5">
                    <button type="button" class="btn btn-light text-center"> <a href="../dashboard.php"> Voltar</a></button>
                    <button type="submit" class="btn btn-success text-center">Salvar</button>  
            </div>
        </form>
    </section>



</body>

</html>