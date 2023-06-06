<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

    //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");

     //Verifica se o formulário da publicação foi submetido.
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Recupera os valores do formulário via método POST.
        $titulo_produto = $_POST["titulo_produto"];
        $descricao_produto = $_POST["descricao_produto"];
        $valor_produto = $_POST["valor_produto"];

        //Verifica se um arquivo de imagem foi enviado.
        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
            $imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));
        } else {
            $imagem = null;
        }
        
        //Cria a instrução SQL se inserção do conteúdo na base de dados.
        $SQL = "INSERT INTO produto (imagem_produto, titulo, descricao, preco, ativo) VALUES ('$imagem', '$titulo_produto',  '$descricao_produto', '$valor_produto', 1);";

        //Executa a consulta.
        if (mysqli_query($connect, $SQL)) {
            
            //Fecha a conexão com o banco de dados.
            mysqli_close($connect);

            //Cria uma variável de retorno usando a sessão.
           $_SESSION['retorno'] = "Produto cadastrado com sucesso!!!";

            //Recireciona o usuário.
            header("location: form-product-edit.php");
        } else {
            
            //Fecha a conexão com o banco de dados.
            mysqli_close($connect);

            //Cria uma variável de retorno usando a sessão.
           $_SESSION['retorno'] = "Não foi possivel cadastrar o produto!!!";

            //Exibe a mensagem na tela.

            //Recireciona o usuário.
            header("location: form-product-edit.php");
        }
    }