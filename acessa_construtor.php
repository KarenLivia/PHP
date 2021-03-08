<?php
include_once 'pessoa.class.php';
include_once 'conta_bancaria.class.php';

//criação de objeto
$Karen = new pessoa(10101,"Karen Livia",1.65,30,"29/09/1989","Graduada",3000);
$conta_Karen = new conta_bancaria($Karen,"Itau",1232,"1234567-8","1234567-8/500",123456);

//manipulação do objeto
echo nl2br("Nome:"."\t".$Karen->get_nome()."\n");
echo nl2br("Código:"."\t".$Karen->get_codigo()."\n");
echo nl2br("Idade:"."\t".$Karen->get_idade()."\n");
echo nl2br("Altura:"."\t".$Karen->get_altura()."\n");
echo nl2br("Nascimento:"."\t".$Karen->get_nascimento()."\n");
echo nl2br("Escolaridade:"."\t".$Karen->get_escolaridade()."\n");
echo nl2br("Salário:"."\t".$Karen->get_salario()."\n");

echo nl2br("Banco:"."\t".$conta_Karen->$Karen."\n");
echo nl2br("Banco:"."\t".$conta_Karen->get_banco()."\n");
echo nl2br("Agência:"."\t".$conta_Karen->get_agencia()."\n");
echo nl2br("Conta corrente:"."\t".$conta_Karen->get_conta_corrente()."\n");
echo nl2br("Conta poupança:"."\t".$conta_Karen->get_conta_poupanca()."\n");
echo nl2br("Senha:"."\t".$conta_Karen->get_senha()."\n");

?>