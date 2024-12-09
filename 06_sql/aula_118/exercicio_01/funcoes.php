<?php 

require_once("base_dados.php");
date_default_timezone_set("Europe/Lisbon");
session_start();

function fazerLogin($login, $senha){
  $usuario_encontrado = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
  if(!empty($usuario_encontrado)){
    // session_start();
    $_SESSION["usuario_encontrado"] = $usuario_encontrado;
    $data_atual = date("H:i:s - d/m/Y");
    // iduSQL("UPDATE colaboradores SET data_ultimo_acesso='$data_atual' WHERE id=$usuario_encontrado[id]");
    iduSQL("INSERT INTO acessos (data, id_colaborador) VALUES ('$data_atual', $usuario_encontrado[id])");
    header("Location: home.php");
  }
}

function verificarLogin(){
  // session_start();
  if(empty($_SESSION["usuario_encontrado"])){header("Location: index.php"); exit();}
}

function logout(){
  // session_start();
  session_destroy();
  header("Location: index.php");
  exit();
}

function getNomeColaborador($id){
  $colaborador = selectSQLUnico("SELECT nome FROM colaboradores WHERE id=$id;");
  return $colaborador["nome"];
}

?>