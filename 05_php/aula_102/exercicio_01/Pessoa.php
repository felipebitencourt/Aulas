<?php

class Pessoa{

  // Atributos
  public $nome;
  public $idade;
  public $altura;
  public $genero;

  // Construtor
  public function __construct($nome, $idade, $altura, $genero){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->genero = $genero;
  }

  // Métodos
  public function getTabela($posicao){
    echo "<tr>";
    echo "<td>" . ($posicao + 1) . "</td>";
    echo "<td>$this->nome</td>";
    echo "<td>$this->idade</td>";
    echo "<td>" . number_format($this->altura, 2) . " m</td>";
    echo "<td>$this->genero</td>";
    echo "</tr>";
  }

}

?>