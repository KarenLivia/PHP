<?php

/*1.Escrever código que possua uma função que receba como argumentos o
nome e o salário de funcionários de uma empresa. A aplicação deve imprimir
em cada linha o nome e o respectivo salário dos funcionários (pelo menos 3).*/
function dadosFuncionario1($nome,$salario){
    echo "Nome: $nome. Salário: R$$salario.<br>\n";

}

dadosFuncionario1("Karen",1500);
dadosFuncionario1("Nando",1800);
dadosFuncionario1("Maria",900);

/*2.Escrever outra versão do código proposto acima, sendo que tanto os nomes
quanto os salários estejam originalmente em arranjos.*/

$dadosFuncionario2 = array("Karen",1500,"Nando",1800,"Maria",1300);
foreach ($dadosFuncionario2 as $funcionario)
print nl2br ($funcionario."\t\n");

/*3.Dada uma relação de 10 pares funcionário salário, escrever versão do código
em que sejam impressos os pares onde o salário seja maior que R$1000.00.*/

function dadosFuncionario3($nome,$salario){
    if ($salario>1000.00){
        echo "Nome: $nome. Salário: R$$salario.<br>\n";
    }
}

dadosFuncionario3("Karen",1500);
dadosFuncionario3("Nando",1800);
dadosFuncionario3("Maria",900);
dadosFuncionario3("Simone",1400);
dadosFuncionario3("Fernanda",800);
dadosFuncionario3("Victor",1200);
dadosFuncionario3("Malu",500);
dadosFuncionario3("Ana",800);
dadosFuncionario3("Bianca",1900);
dadosFuncionario3("Marco",2100);

/*4.Escrever código que mostre os elementos de um arranjo fora da ordenação dos
índices dos elementos através do uso do “sort”.*/



/*5.Escrever outra versão do código proposto acima, retornando a quantidade de
elementos do arranjo através do uso do “count”.*/



/*6.Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos
do mesmo através do uso do “array_slice” .*/

?>