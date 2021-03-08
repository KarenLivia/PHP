<?php

require_once 'conta_bancaria1.class.php';
require_once 'conta_poupanca.php';
require_once 'conta_corrente.php';

//criação dos objetos
$contas = array();
$contas[0] = new conta_corrente(6677,"CC.1234.56",300,400);
$contas[1] = new conta_poupanca(6678,"PP.1234.57",100);

//percorre as contas
foreach ($contas as $key => $conta){

    print "Conta: {$conta->getInfo()}<br>\n";
    print "     Saldo atual: {$conta->getSaldo()} <br>\n";
    $conta->depositar(200);
    print "     Depósito de: 200 <br>\n";
    print "     Saldo atual: {$conta->getSaldo()} <br>\n";

    if ($conta->retirar(700)){
        print "     Retirada de: 700 <br>\n";
    }else{
        print "     Retiada de: 700 (não permitida) <br>\n";
    }
    print "     Saldo atual: {$conta->getSaldo()} <br>\n";
}
?>