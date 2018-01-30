<?php
declare(strict_types = 1);
require_once 'Funcionario.php';
require_once 'Secretaria.php';
require_once 'NetaSecretaria.php';
    echo"\n\t----Funcionario----".PHP_EOL;
    $f1  = new Funcionario();
    $f1 -> setCod(10);
    $f1 -> setNome("Funcionario da Silva");
    $f1 -> mostraDados();
    //
    echo"\n\t----Secretaria----".PHP_EOL;
    $s1 = new Secretaria();
    $s1 -> setCod(20);
    $s1->setRamal("2122");
    $s1 -> setNome("Secretara da Silva");
    //$s1 -> mostraDados();
    $s1-> mostraRamal();

    echo"\n\t----NetaSecretaria----".PHP_EOL;
    $n1 = new NetaSecretaria();
    $n1 -> setCod(30);
    $n1->setRamal("3333");
    $n1 -> setNome("Neta da Silva");
    //$s1 -> mostraDados();
    $n1-> setNeta("Sou a Neta");
    $n1-> mostraNomeNeta();

 ?>
