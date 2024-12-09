<?php

require_once("base_dados.php");
date_default_timezone_set("Europe/Lisbon");
session_start();

function fazerLogin($login, $senha)
{
    // $usuario_encontrado = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
    $usuario_encontrado = selectSQLUnico("SELECT * FROM colaboradores_criptografados WHERE login='$login'");
    if (!empty($usuario_encontrado) && password_verify($senha, $usuario_encontrado["senha"])){
        // session_start();
        $_SESSION["usuario_encontrado"] = $usuario_encontrado;
        // $data_atual = date("H:i:s - d/m/Y");
        // iduSQL("UPDATE colaboradores SET data_ultimo_acesso='$data_atual' WHERE id=$usuario_encontrado[id]");
        // iduSQL("INSERT INTO acessos (id_colaborador) VALUES ($usuario_encontrado[id])");
        iduSQL("INSERT INTO colaboradores_criptografados (login) VALUES ($usuario_encontrado[id])");
        header("Location: home.php");  
    }
}

function verificarLogin()
{
    // session_start();
    if (empty($_SESSION["usuario_encontrado"])) {
        header("Location: index.php");
        exit();
    }
}

function logout()
{
    // session_start();
    session_destroy();
    header("Location: index.php");
    exit();
}

function getNomeColaborador($id)
{
    $colaborador = selectSQLUnico("SELECT nome FROM colaboradores WHERE id=$id;");
    return "$colaborador[nome] $colaborador[apelido]";
}
