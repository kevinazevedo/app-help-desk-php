<?php
    session_start();

    // variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    // usuários do sistema 
    $usuarios_app = array(
        array("email" => "adm@gmail.com", "senha" => "adm"),
        array("email" => "dev@gmail.com", "senha" => "102030"),
    );

    foreach ($usuarios_app as $user) {
        if ($user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"]) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        echo "Usuário autenticado";
        $_SESSION["autenticado"] = "SIM";
    }

    else {
        $_SESSION["autenticado"] = "NAO";
        header("location: index.php?login=erro");
    }
?>