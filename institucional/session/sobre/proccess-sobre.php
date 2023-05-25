
<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

     //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

    //Variáveis que irão receber os dados via POST do formulário.
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $historia = $_POST["historia"];
    $missao = $_POST["missao"];
    $visao = $_POST["visao"];
    $valores = $_POST["valores"];
    $objetivo = $_POST["objetivo"];
    $localizacao = $_POST["localizacao"];
    

    //Seleciona o que existir na tabela contato.
    $SQLConsulta = "SELECT * FROM sobre;";

    //Executa a consulta.
    $consulta = mysqli_query($connect, $SQLConsulta);

    //Verifica se existem registros na tabela.
    if(mysqli_num_rows($consulta) > 0) {

        //Instrução SQL de inserção de dados no BD.
        $SQL = "UPDATE sobre SET
                       nome = '" . $nome . "',
                       foto = '" . $imagem . "',
                       historia = '" . $historia . "',
                       missao = '" . $missao . "',
                       visao = '" . $visao . "',
                       valores = '" . $valores . "',
                       objetivo = '" . $objetivo . "',
                       localizacao = '". $localizacao ."';";
    } else {

        //Instrução SQL de inserção de dados no BD.
        $SQL = "INSERT INTO sobre ( nome,
                                    foto,
                                    historia, 
                                    missao, 
                                    visao, 
                                    valores,
                                    objetivo,
                                    localizacao)
                VALUES ('" . $nome . "',
                        '" . $imagem . "',
                        '" . $historia . "', 
                        '" . $missao . "', 
                        '" . $visao . "', 
                        '" . $valores . "',
                        '" . $objetivo ."',
                        '" . $localizacao ."' );";
    }

     //Faz a tentativa de inserção dos dados no BD.
     if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Informações SOBRE a empresa cadastrado com sucesso!!!";

        //Redireciona o usuário.
        header("location: form-sobre-edit.php");
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Não foi possível cadastrar informações SOBRE a empresa!!!";

        //Redireciona o usuário.
        header("location: form-sobre-edit.php");
    }
?>