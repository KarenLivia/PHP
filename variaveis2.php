<?php

//Função interna à aplicação
function somatoria($a){
/*
Variável do tipo "static" mantém o valor que lhe foi
atribuído na última execução.
*/

static $b;
/*+=: soma o valor que já tem na variável com
o atribuído.
*/
$b += $a;
//<br>\n:pula linha.
echo "valor de a = $a valor de b = $b <br>\n";
}

somatoria(2);
somatoria(4);
somatoria(6);

?>