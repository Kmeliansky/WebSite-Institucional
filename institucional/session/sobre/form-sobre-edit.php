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
    <!-- Menu do website -->
    <nav class="navbar navbar-expand-lg " style="background-color: #6043B5;">
        <div class="container-fluid">
            <img class="text-uppercase navba r-brand text-light" src="../institucional/image/logo.svg"
                alt="logo da marca">

            <div class="navbar-nav">
                <a class="nav-link text-light" href="login/form-login.php">Ajuda</a>
            </div>
        </div>
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
            action="proccess-sobre.php" method="post">
            <!--Edição sobre a empresa-->
            <fieldset class="m-5 border-secondary-subtle">
                <!--Edição sobre a empresa-->
                <h2>Sobre</h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">História</label>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="historia"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Missão</label>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="missao"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Visão</label>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="visao"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Valores</label>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="valores"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Objetivo</label>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="objetivo"></textarea>
                </div>
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