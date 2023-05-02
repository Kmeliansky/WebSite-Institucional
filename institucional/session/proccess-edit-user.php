<?php
    //Chamada de inclusão do arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Receber os dados passados via método POST.
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["data_nascimento"];
    $cep = $_POST["cep"];
    $logradouro = $_POST["endereco"];
    $codigoArea = $_POST["codigo_area"];
    $celular = $_POST["numero_celular"];
    $email = $_POST["email"];

    //Instrução SQL que atualiza os dados do usuário.
    $SQL = "UPDATE usuario
            SET nome = '$nome',
                cpf = '$cpf',
                data_nascimento = '$dataNascimento',
                cep = '$cep',
                endereco = '$endereco',
                codigo_area = '$codigoArea',
                numero_celular = '$celular',
                email = '$email'
            WHERE id = '$id';";

    //Faz a execução da instrução SQL e obtem um retorno.
    if(mysqli_query($connect, $SQL)){

        //Fecha a conexão com o BD.
        mysqli_close($connect);

        //Cria uma mensagem de retorno da operação.
        $retorno = "As informações do usuário foram alteradas com sucesso!!!";

        //Redireciona o usuário.
        header("location: form-edit-user.php?retorno=" . $retorno . "&id=" . $id);
    }else{
        //Fecha a conexão com o BD.
        mysqli_close($connect);

        //Cria uma mensagem de retorno da operação.
        $retorno = "Não foi possivel alterar as informações do usuários!!!";

        //Redireciona o usuário.
        header("location: form-edit-user.php?retorno=" . $retorno . "&id=" . $id);
    }
?>