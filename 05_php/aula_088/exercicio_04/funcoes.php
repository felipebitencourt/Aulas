<?php

function loopWhile(){
    $numb = 1;
    while($numb <= intval($_GET["numb"])){
        echo "$numb ";
        $numb += 1;
    }
}

function loopFor(){
    for($numb = 1; $numb <= intval($_GET["numb"]); $numb += 1){
        echo "$numb ";
    }
}

?>