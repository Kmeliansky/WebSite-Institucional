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
                <h2>Sobre</h2>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">História</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="historia"></textarea>
                </div>
                <div class="mb-3">
                    <div title="A missão de uma empresa é aquilo que ela determina como a razão de ser do seu negócio, a sua entrega ao cliente. Como a empresa é um ser vivo e mutável, a missão pode ser revista ao longo do tempo, se adequando às novas necessidades do mercado"
                        class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Missão</label>
                        <!-- Logo de ajuda no input -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-question-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                        </svg>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="missao"></textarea>
                </div>
                <div class="mb-3">
                    <div title="A visão de uma empresa é onde ele quer chegar em um determinado tempo. É importante ter a visão sempre no horizonte, pois as ações presentes devem estar alinhadas com onde se quer chegar. Ter visão do seu negócio estabelece os parâmetros para a tomada de decisão, para os investimentos e principalmente para a estratégia de negócio que levará a visão."
                        class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Visão</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="visao"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Valores</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="valores"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Objetivo</label>
                    </div>
                    <textarea class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="objetivo"></textarea>
                </div>
                <div class="mb-3">
                    <div class="text-start">
                        <label for="exampleFormControlInput1" class="form-label">Localização</label>
                    </div>
                    <input type="text" class="input-txt form-control" id="exampleFormControlTextarea1" rows="3"
                        name="localizacao" placeholder="https://goo.gl/maps/K6CKdT8trJPXrivb7"></textarea>
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