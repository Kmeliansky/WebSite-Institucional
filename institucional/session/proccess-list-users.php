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
    <title>Lista dos administradores da Página</title>

    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Link de referência do CSS de Icones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <style>
      .title{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: <?php print($sobre["cor_secundaria"]) ?>;
      }
    </style>
  </head>
  <body>

    <!----------------------Menu------------------------>
    <nav class="nave d-flex align-items-center" style="background-color:<?php print($sobre["cor_primaria"]) ?>;">
    <section class="container py-3 nav d-flex justify-content-between align-items-center">
      <div class="item-menu">
      <img class="" src="<?php print($imagemLogo); ?>" alt="Imagem do Produto" width="70px">
      </div>
      <div class="item-menu">
      <h1 class="title">Lista de administradores da Página</h1>
      </div>
      <div class="item-menu">
        <a class="nav-link text-light btn" href="../session/exit.php" style="background-color:  <?php print($sobre["cor_secundaria"]) ?>; color:#FFFFFF;">Sair</a>
      </div>
    </section>
  </nav>

    <!-- Seção do formulário -->
    <section class="container py-5">

      <div class="row justify-content-center">

        <!-- Captura e apresenta os retornos para o usuário -->
        <div class="row">
          <div class="text-center">
            <?php 
              //Capturar a mensagem de retorno via método GET.
              $retorno = $_GET["retorno"];

              //Verifica se existe um retorno e o apresenta.
              if(isset($retorno)){

                //Apresenta o conteúdo do retorno.
                print($retorno);
              }
            ?>
          </div>
        </div>  

        <div class="text-center">

            <!-- Tabela que exibe os usuários -->
            <table class="table table-bordered  border border-secondary-subtle shadow mb-5 bg-body-tertiary rounded">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Visualizar</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                  <?php
                    //Chamada de inclusão do arquivo de conexão com o BD.
                    include("../configuration/connection.php");

                    //Instrução SQL de seleção dos usuários.
                    $SQL = "SELECT id, nome, cpf FROM usuario WHERE ativo = 1;";

                    //Executa a consulta SQL.
                    $consulta = mysqli_query($connect, $SQL);

                    //Verifica se existem retornos na consulta SQL.
                    if (mysqli_num_rows($consulta) > 0){

                      //Laço de repetição dos usuários.
                      //Apresenta todos os usuários do BD.
                      while ($usuario = mysqli_fetch_assoc($consulta)){
                        ?>
                        <tr>
                          <th scope="row"><?php print($usuario["id"]); ?></th>
                          <td><?php print($usuario["nome"]); ?></td>
                          <td><?php print($usuario["cpf"]); ?></td>
                          <td><a href="#"><i class="bi bi-eye-fill"></i></a></td>
                          <td><a href="form-edit-user.php?id=<?php print($usuario["id"]); ?>"><i class="bi bi-pencil-square"></i></a></td>
                          <td><a href="proccess-delete-user.php?id=<?php print($usuario["id"]); ?>"><i class="bi bi-trash3-fill"></i></a></td>
                        </tr>
                        <?php
                      }
                      
                      //Fecha a conexâo com o BD.
                      mysqli_close($connect);

                    }else{
                      //Retorna a mensagem para o usuário.
                      print("Não existem usuários cadastrados no banco de dados.");

                      //Fecha a conexão com o BD.
                      mysqli_close($connect);
                    }
                  ?>
                    
                </tbody>
            </table>
        </div>

      </div>

    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>