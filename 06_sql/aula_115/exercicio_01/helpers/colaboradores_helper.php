<?php

date_default_timezone_set("Europe/Lisbon");

require_once("base_dados.php");

function fazerLogin($login, $senha){
    $usuario_encontrado = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
    if(!empty($usuario_encontrado)){
        session_start();
        $_SESSION["usuario_encontrado"] = $usuario_encontrado;
        $data_atual = date("H:i:s - d/m/Y");
        // iduSQL("UPDATE colaboradores SET data_ultimo_acesso='$data_atual' WHERE id=$usuario_encontrado[id]");
        iduSQL("INSERT INTO acessos (data, id_colaborador) VALUES ('$data_atual', $usuario_encontrado[id]) ");
        return true;
    }
    else{
        return false;
    } 
}

function verificarLogado(){
    session_start();
    if(!empty($_SESSION["usuario_encontrado"])){
        return $_SESSION["usuario_encontrado"];
    }
    else{
        return false;
    }
}

function logout(){
    session_start();
    session_destroy();
    }

?>