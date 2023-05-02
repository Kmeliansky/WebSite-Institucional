<?php
    //Chama o arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //Variáveis que irão receber os dados via POST do formulário.
    $titulo_produto = $_POST["titulo_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $valor_produto = $_POST["valor_produto"];

    $titulo_servico = $_POST["titulo_servico"];
    $descricao_servico = $_POST["descricao_servico"];
    
    $sobre = $_POST["sobre"];
    $valores_e_missao = $_POST["valores"];
    $area_atuacao = $_POST["area_atuacao"];

    //Instrução SQL de inserção de dados no BD.
    $SQL = "INSERT INTO usuario (nome, 
                                 cpf, 
                                 data_nascimento, 
                                 cep, 
                                 endereco, 
                                 codigo_area, 
                                 numero_celular, 
                                 email, 
                                 senha, 
                                 ativo)
            VALUES ('" . $nome . "', 
                    '" . $cpf . "', 
                    '" . $dataNascimento . "', 
                    '" . $cep . "', 
                    '" . $logradouro . "', 
                    '" . $codigoArea . "', 
                    '" . $celular . "', 
                    '" . $email . "', 
                    SHA1('" . $senha . "'),
                    1);
                    ";

    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Usuário cadastrado com sucesso!!!";
        header("location: ../login/form-login.php?retorno=" . $retorno);
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Não foi possível cadastrar o usuário!!!";
        header("location: form-create.php?retorno=" . $retorno);
    }
?>