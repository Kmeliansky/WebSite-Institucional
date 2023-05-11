
<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

     //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

    //Variáveis que irão receber os dados via POST do formulário.
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];

    //Seleciona o que existir na tabela contato.
    $SQLConsulta = "SELECT * FROM contato;";

    //Executa a consulta.
    $consulta = mysqli_query($connect, $SQLConsulta);

    //Verifica se existem registros na tabela.
    if(mysqli_num_rows($consulta) > 0) {

        //Instrução SQL de inserção de dados no BD.
        $SQL = "UPDATE contato SET
                       celular = '" . $celular . "',
                       email = '" . $email . "',
                       facebook = '" . $facebook . "',
                       instagram = '" . $instagram . "';";
    } else {

        //Instrução SQL de inserção de dados no BD.
        $SQL = "INSERT INTO contato (celular, 
                                     email, 
                                     facebook, 
                                     instagram,
                                     ativo)
                VALUES ('" . $celular . "', 
                        '" . $email . "', 
                        '" . $facebook . "', 
                        '" . $instagram . "',
                        1);";
    }

     //Faz a tentativa de inserção dos dados no BD.
     if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Contato cadastrado com sucesso!!!";

        //Redireciona o usuário.
        header("location: form-contato-edit.php");
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Não foi possível cadastrar o contato!!!";

        //Redireciona o usuário.
        header("location: form-contato-edit.php");
    }
?>