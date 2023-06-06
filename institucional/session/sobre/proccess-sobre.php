
<?php
    //Chama o arquivo de conexão com o BD.
    include("../../configuration/connection.php");

     //chamada para o arquivo que verifica se o usuario está logado
    include("../../configuration/user-session.php");


    //Verifica se o formulário da publicação foi submetido.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Recupera os valores do formulário via método POST.
    $nome = $_POST["nome"];
    $cor_primaria = $_POST["cor_primaria"];
    $cor_secundaria = $_POST["cor_secundaria"];
    $historia = $_POST["historia"];
    $missao = $_POST["missao"];
    $visao = $_POST["visao"];
    $valores = $_POST["valores"];
    $objetivo = $_POST["objetivo"];
    $localizacao = $_POST["localizacao"];

    //Verifica se um arquivo de imagem foi enviado.
    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        $imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));
    } else {
        $imagem = null;
    }

    //Verifica se um arquivo de imagem foi enviado.
    if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == 0) {
        $logo = addslashes(file_get_contents($_FILES["logo"]["tmp_name"]));
    } else {
        $logo = null;
    }
    
    $SQLConsulta = "SELECT * FROM sobre;";

    //Executa a consulta.
    $consulta = mysqli_query($connect, $SQLConsulta);

    //Verifica se existem registros na tabela.
    if(mysqli_num_rows($consulta) > 0) {

        //Instrução SQL de inserção de dados no BD.
        $SQL = "UPDATE sobre SET nome = '$nome', logo ='$logo', cor_primaria = '$cor_primaria', cor_secundaria = '$cor_secundaria', imagem_empresa = '$imagem', historia = '$historia', missao = '$missao', visao = '$visao',  valores = '$valores', objetivo = '$objetivo', localizacao = '$localizacao'";
    } else {

        //Instrução SQL de inserção de dados no BD.
      $SQL = "INSERT INTO sobre ( nome, logo, cor_primaria, cor_secundaria, imagem_empresa, historia, missao, visao, valores, objetivo, localizacao) VALUES ('$nome', '$cor_primaria', '$cor_secundaria', '$imagem', '$historia ',  '$missao',  '$visao',   '$valores',  '$objetivo',  '$localizacao ' )";
    }

    //Executa a consulta.
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
      $_SESSION['retorno'] = "Não foi possivel cadastrar as informações sobre a empresa!!!";

       //Redireciona o usuário.
     header("location: form-sobre-edit.php");
    }
}

?>