<?php

function getDolar($euro){
    return "$ " .  number_format($euro * 1.102, 2);
}

function getLibras($euro){
    return "£ " .  number_format($euro * 0.84, 2);
}

function getReais($euro){
    return "R$ " .  number_format($euro * 6.22, 2);
}

function getIene($euro){
    return "¥ " . number_format($euro * 156.77, 0);
}

?>