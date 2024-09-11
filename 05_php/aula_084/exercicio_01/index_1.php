<?php

$saldo = 25;
$chover = "nao";
$chover2 = false;


// || = or      pode usar strtolower($chover) - para ser apenas letras minúsculas
if($saldo >= 15 || $chover == "nao"){
    echo "Ir ao cinema!";
}
else{
    echo "Ficar em casa.";
}

?>