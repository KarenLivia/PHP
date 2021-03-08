<?php

require_once 'conta_bancaria1.class.php';
require_once 'conta_poupanca.php';
require_once 'conta_corrente.php';
require_once 'consignado.php';
require_once 'rendimentos.php';

//criação de objeto do tipo rendimentos
$rend = new rendimentos(4400,"CC.29406.07",3000,0.1);

print "Conta: {$rend->getInfo()} <br>\n";
print "Saldo atual: {$rend->getSaldo()} <br>\n";

$rend->depositar(330);
print "Depósito de: 330 <br>\n";
print " Saldo atual: {$rend->getSaldo()} <br>\n";

$rend->set_juros();
print "     Retirada de: 100 <br>\n";
print "     Saldo atual: {$consig->getSaldo()} <br>\n";

$consig->set_emprestimo(600.87);
$divida_total = ($consig->get_emprestimo()+ $consig->get_divida());
print "Divida total: R$ {$divida_total} <br>\n";

?>