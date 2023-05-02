<?php
    //Chamada de inclusão do arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Recupera o ID do usuário via método GET.
    $id = $_GET["id"];

    //Instrução SQL que puxa os dados do usuário.
    $SQL = "SELECT nome, cpf, data_nascimento, genero, cep, logradouro, 
                   numero_residencia, complemento, bairro, cidade, estado,
                   codigo_area, numero_celular, email
            FROM usuario
            WHERE id = $id;";

    //Executa a instrução SQL.
    $consulta = mysqli_query($connect, $SQL);

    //Criar um array, para exibir as informações do usuário.
    $usuario = mysqli_fetch_assoc($consulta);
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edição de Usuário</title>
    <!-- Link de referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg bg-danger" style="background-color: #6043B5;">
        <div class="container-fluid">
          <a class="text-uppercase navba r-brand text-light" href="#">Logo aqui</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
            <div class="navbar-nav">
              <a class="nav-link text-light" href="login/form-login.php">Sair</a>
            </div>
          
        </div>
    </nav>

    <!-- Seção do formulário -->
    <section class="container py-5">
        <div class="row justify-content-center">

            <!-- Captura e apresenta os retornos para o usuário -->
            <div class="row mb-4">
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

            <form action="proccess-edit-user.php" method="post" class="row">
                
                <!-- Nome e CPF -->
                <div class="row">
                    <div class="col-2 my-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?php print($id); ?>" readonly>
                    </div>
                    <div class="col-5 my-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php print($usuario["nome"]); ?>">
                    </div>
                    <div class="col-5 my-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="<?php print($usuario["cpf"]); ?>">
                    </div>
                </div>

                <!-- Data de nascimento e genêro -->
                <div class="row">
                    <div class="col-8 my-3">
                        <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php print($usuario["data_nascimento"]); ?>">
                    </div>
                   
                </div>

                <!-- CEP -->
                <div class="row">
                    <div class="col-4 my-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="<?php print($usuario["cep"]); ?>">
                    </div>
                    <div class="col-4 my-3">
                        <label for="cep" class="form-label">endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php print($usuario["endereco"]); ?>">
                    </div>
                    
                </div>

                <!--código de área e celular -->
                    <div class="col-4 my-3">
                        <label for="codigoArea" class="form-label">Código de Área</label>
                        <select id="codigo_area" name="codigo_area" class="form-select">
                          <option selected>Selecione o código de área...</option>
                          <option value="+55">Brasil (+55)</option>
                        </select>
                    </div>
                    <div class="col-4 my-3">
                        <label for="celular" class="form-label">Celular com DDD</label>
                        <input type="celular" class="form-control" id="numero_celular" name="numero_celular" value="<?php print($usuario["numero_celular"]); ?>">
                    </div>
                </div>

                <!-- E-mail e senha -->
                <div class="row">
                    <div class="col-12 my-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php print($usuario["email"]); ?>">
                    </div>
                </div>
                
                <!-- Botão de voltar e de salvar -->
                <div class="row">
                    <div class="col-12 my-3">
                        <a href="dashboard.php" class="btn btn-primary">Voltar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Link de referência ao JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
    //Encerra a conexão com o BD.
    mysqli_close($connect);
?>