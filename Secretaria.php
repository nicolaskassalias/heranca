<?php
require_once "Funcionario.php";
class Secretaria extends Funcionario{
  public $ramal;
  public function setRamal(string $ramal){
    $this->ramal=$ramal;
  }
  public function mostraRamal(){
    parent::mostraDados();
    echo "\n\tRamal: ".$this->ramal.PHP_EOL;
  }
}
?>
