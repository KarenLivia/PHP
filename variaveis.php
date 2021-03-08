<?php

//Comentários

/*
Atribuição de uma variável à outra: 
as duas variáveis apontam para a mesma região de memória
*/
//PHP já subentende que a variável é numérica e inteiro
$a = 5;
$b = $a;

//echo: imprime no console
echo $b;

/*
Variavéis variantes:
Variáveis que podem mudar de acordo com a necessidade
Usam-se dois sinais "$$" precedendo o nome de uma variável
para o PHP referenciar uma variável representada pelo conteúdo da 
primeira.
*/

//nome da variavel = c
$c = 'nome';

/*criação de variável identificada pelo conteúdo
da variável "c".
*/
$$c = 'Eliana';

//resultado da referência a $nome = eliana:
/*
print: imprime uma string no console
-> nl2br indica que \n é para pular linha
e "." concatena pular de linha + variável $nome
*/

print nl2br("\n".$nome);

?>