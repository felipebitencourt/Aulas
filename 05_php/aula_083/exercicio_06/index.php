<?php

$idade = 15;
$temp = 15.5;

if($idade >= 18){
    echo "<h1> De maior! </h1>";
}
else{
    echo "<h1> De menor! </h1>";
}

echo "<hr>";

if($temp <= 14){
    echo "FRIO";
}
// elseif($temp > 14 && $temp < 24){   && = and
//     echo "NORMAL";
// }
elseif($temp < 24){
    echo "NORMAL";
}
else{
    echo "QUENTE";
}

?>