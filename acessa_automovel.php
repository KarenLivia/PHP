<?php
include_once 'automovel.class.php';
 //criação do objeto
 $Veiculo = new Automovel("Volks", "Preto", 45000, 2019, "Golf", "1D4GP25B0338108775");
 
 //manipulando o objeto
 echo nl2br ("Marca: "."\t".$Veiculo->get_marca()."\n");
 echo nl2br ("Cor: "."\t".$Veiculo->get_cor()."\n");
 echo nl2br ("Preço: "."\t".$Veiculo->get_preço()."\n");
 echo nl2br ("Ano: "."\t".$Veiculo->get_ano()."\n");
 echo nl2br ("Modelo: "."\t".$Veiculo->get_modelo()."\n");
 echo nl2br ("Chassi: "."\t".$Veiculo->get_chassi()."\n");
 
 ?>