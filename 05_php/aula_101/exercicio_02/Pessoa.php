<?php

class Pessoa{

    // Atributos

    public $nome;
    public $idade;
    public $altura;
    public $genero;

    // Construtor

    function __construct($nome, $idade, $altura, $genero){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->genero = $genero;
    }

    // Métodos

    function toString(){
        echo "<td>" . $this->nome . "</td>";
        echo "<td>" . $this->idade . " anos" . "</td>";
        echo "<td>" . $this->altura . " m" . "</td>";
        echo "<td>" . $this->genero . "</td>";
    }
}

?>