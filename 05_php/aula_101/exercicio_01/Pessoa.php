<?php

class Pessoa{

    // Atributos

    public $nome;
    public $morada;
    public $idade;

    // Construtor

    function __construct($nome, $morada, $idade){
        $this->nome = $nome;
        $this->morada = $morada;
        $this->idade = $idade;
    }

    // Métodos

    function toString(){
        echo "<div class='pessoa>'";
        echo "<ul>";
        echo "<li>Nome: " . $this->nome . "</li>";
        echo "<li>Morada: " . $this->morada . "</li>";
        echo "<li>Idade: " . $this->idade . "</li>";
        echo "</ul>";
        echo "</div><br>";
    }

    function completarAnos(){
        $this->idade += 1;
    }
}

?>