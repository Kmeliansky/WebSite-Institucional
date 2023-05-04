<?php

    //Chama o arquivo de conexão com o BD.
    include("../configuration/connection.php");

    //chamada para o arquivo que verifica se o usuario está logado
    include("../configuration/user-session.php");


    //Variáveis que irão receber os dados via POST do formulário.
    $sobre = $_POST["sobre"];
    $valores_e_missao = $_POST["valores"];
    $area_atuacao = $_POST["area_atuacao"];
    $whatsapp = $_POST["whatsapp"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $email = $_POST["email"];
    $titulo_servico = $_POST["titulo_servico"];
    $descricao_servico = $_POST["descricao_servico"];
    $titulo_produto = $_POST["titulo_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $valor_produto = $_POST["valor_produto"];
    
   
    //Instrução SQL de inserção de dados no BD.
    $SQL = "INSERT INTO usuario (sobre, 
                                 valores_e_missao, 
                                 area_atuacao, 
                                 whatsapp, 
                                 linkedin, 
                                 facebook, 
                                 instagram, 
                                 email, 
                                 titulo_servico, 
                                 descricao_servico,
                                 titulo_produto,
                                 descricao_produto,
                                 valor_produto)
            VALUES ('" . $sobre . "', 
                    '" . $valores_e_missao . "', 
                    '" . $area_atuacao . "', 
                    '" . $whatsapp . "', 
                    '" . $linkedin . "', 
                    '" . $facebook . "', 
                    '" . $instagram . "', 
                    '" . $email . "', 
                    '" . $titulo_servico . "', 
                    '" . $descricao_servico . "', 
                    '" . $titulo_produto . "', 
                    '" . $descricao_produto . "', 
                    '" . $valor_produto . "', 
                    );
                    ";

    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Pagina editada com sucesso!!!";
        header("location: form-edit-page.php?retorno=" . $retorno);
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Redireciona a página para o login.
        $retorno = "Não foi possível editar a pagina!!!";
        header("location: form-edit-page.php?retorno=" . $retorno);
    }
?>