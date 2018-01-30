<?php
require_once "Secretaria.php";
class NetaSecretaria extends Secretaria{
  public $nomeNeta;
  public function setNeta(string $nomeNeta){
    $this->nomeNeta=$nomeNeta;
  }
  public function mostraNomeNeta(){
    parent::mostraDados();
    //parent::mostraRamal();
    $this->mostraRamal();
    parent::mostraRamal();
    echo "\n\tNeta: ".$this->nomeNeta.PHP_EOL;
  }
  public function mostraRamal(){
    echo "\n\tMeu Método da classe NetaSecretaria".PHP_EOL;
    //echo "\n\tCod: ".$this->cod.PHP_EOL;
    //echo "\n\tNome: ".$this->nome.PHP_EOL;
  }
}
?>
