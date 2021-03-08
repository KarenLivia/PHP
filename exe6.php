<?php
$frutas = array("maça","laranja","mamão","banana");

echo nl2br ($frutas[0]."\n");
echo nl2br ($frutas[1]."\n");
echo nl2br ($frutas[2]."\n");
echo nl2br ($frutas[3]."\n");

echo nl2br ("Utilizando array_slice, à partir do elemento do índice 1, coletando 2 itens: ");
print_r(array_slice($frutas,1,2));

?>

