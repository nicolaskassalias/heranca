<?php
declare(strict_types = 1);
class Funcionario{
  public $cod=0;
  public $nome;
  public function setCod(int $cod){
    $this->cod=$cod;
  }
  public function setNome(string $nome){
    $this->nome=$nome;
  }
  public function mostraDados(){
    echo "\n\tMétodo da classe Funcionario".PHP_EOL;
    echo "\n\tCod: ".$this->cod.PHP_EOL;
    echo "\n\tNome: ".$this->nome.PHP_EOL;
  }

}
?>
