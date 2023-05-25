<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

    //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

    //Variáveis que irão receber os dados via POST do formulário.
    $imagem_produto = $_POST["imagem_produto"];
    $titulo_produto = $_POST["titulo_produto"];
    $descricao_produto = $_POST["descricao_produto"];
    $valor_produto = $_POST["valor_produto"];
    

    //Instrução SQL de inserção de dados no BD.
    $SQL = "INSERT INTO produto (imagem_produto, 
                                 titulo, 
                                 descricao, 
                                 preco,
                                 ativo)
            VALUES ('" . $imagem_produto . "', 
                    '" . $titulo_produto . "', 
                    '" . $descricao_produto . "', 
                    '" . $valor_produto . "',
                         1);";

    //Faz a tentativa de inserção dos dados no BD.
    if (mysqli_query($connect, $SQL)) {
        
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Produto cadastro cadastrado com sucesso!!!";

        //Redireciona o usuário.
        header("location: form-product-edit.php");
    } else {
        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "Não foi possível cadastrar o Produto!!!";

        //Redireciona o usuário.
        header("location: form-product-edit.php");
    }
?>