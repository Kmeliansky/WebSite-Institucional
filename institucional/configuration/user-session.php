<?php
    
    // verifica se a sessão do usuario existe.
    if(!isset($_SESSION)){

        //caso ela não exista, cria a sessão usuario.
        session_start();

        //verifica se o usuario fez o login.
       if(!isset($_SESSION["usuarioEmail"])){

            // caso ele não tenha feito login, redireciona para a tela de login
           header("Location: ../login/form-login.php");
       }
    } 
?>