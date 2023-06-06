
<?php
    //Chama o arquivo de conexão com o BD.
    include("./configuration/connection.php");

    //Chama o arquivo de conexão com o BD.
    include("./configuration/user-session.php");
    

    //Variáveis que irão receber os dados via POST do formulário.
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $codigoArea = $_POST["codigoArea"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmaSenha = $_POST["confirmaSenha"];

    // instrução que verifica se o cpf já existe no banco de dados.
    $SQLVerificaCPF = "SELECT cpf FROM usuario WHERE cpf='$cpf';"; 

    // executa a consulta do cpf
    $consultaCPF = mysqli_query($connect, $SQLVerificaCPF);

     //verifica se houve retorno na consulta ao banco de dados
    if(mysqli_num_rows($consultaCPF)> 0){

        //Encerra a conexão com o BD.
        mysqli_close($connect);

        //Cria uma variável de retorno usando a sessão.
        $_SESSION['retorno'] = "O CPF Digitado já está cadastrado";

        //Redireciona o usuário.
        header("location: form-create.php");
    }else{
        if($senha == $confirmaSenha){
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
                            '" . $endereco . "', 
                            '" . $codigoArea . "', 
                            '" . $celular . "', 
                            '" . $email . "', 
                            SHA1('" . $senha . "'),
                            1);";

            //Faz a tentativa de inserção dos dados no BD.
            if (mysqli_query($connect, $SQL)) {
                
                //Encerra a conexão com o BD.
                mysqli_close($connect);

                //Redireciona a página para o login.
                $retorno = "Usuário cadastrado com sucesso!!!";
                header("location: ../dashboard.php?retorno=" . $retorno);
            } else {
                //Encerra a conexão com o BD.
                mysqli_close($connect);

                //Redireciona a página para o login.
                $retorno = "Não foi possível cadastrar o usuário!!!";
                header("location: ../../session/user/form-create.php?retorno=" . $retorno);
            }                
                }else{
                //Encerra a conexão com o BD.
                mysqli_close($connect);

                //Redireciona a página para o login.
                $retorno = "O campo senha e o confirma senha não conferem!!!";
                header("location: ../../session/user/form-create.php?retorno=" . $retorno);
                }
            }
?>