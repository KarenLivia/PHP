<?php

$nome1 = $_POST['nome1'];
$salario1 = $_POST['salario1'];
$nome2 = $_POST['nome2'];
$salario2 = $_POST['salario2'];
$nome3 = $_POST['nome3'];
$salario3 = $_POST['salario3'];

function mostraDados ($nome1,$nome2,$nome3,$salario1,$salario2,$salario3){
    echo "Funcionário 1, $nome1. Salário é: R$$salario1.";
    echo "Funcionário 2, $nome2. Salário é: R$$salario2.";
    echo "Funcionário 3, $nome3. Salário é: R$$salario3.";
}

mostraDados();
?>

