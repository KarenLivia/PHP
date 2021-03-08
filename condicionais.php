<?php

//Exemplo "If"

$salario = 800.70;
$tempo_servico = 25;
$folga_fim_de_semana = false; //variavel booleana

print nl2br("Exemplo If \n\n");

if (($tempo_servico>=20)and($salario>1000.88)and($folga_fim_de_semana!=true)){
	print_r("\nDados errados do funcionário: ");}
else if (($tempo_servico==25)and($salario==800.70)and($folga_fim_de_semana!=true)){
	print_r("Dados corretos do funcionário: ");
//nl2br: permite a formatação no console
	print nl2br("\ntempo de serviço: ".$tempo_servico."\nsalario R$= ".$salario."\nfolga sábado e domingo: não ".$folga_fim_de_semana."\n\n");
}

//Exemplo "While"

print nl2br("Exemplo While \n\n");

$a = 1;

while ($a<=10){
	print nl2br($a."\n");
	$a++;
}

?>