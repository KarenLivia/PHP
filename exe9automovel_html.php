<?php
    //insere classe
    include_once 'exe9automovel.class.php';

    /*criação de objeto ou variável de instância
    do tipo da classe: "car"*/
    $car = new automovel;

    //atribuição de valores aos atributos
    $car->set_marca($_POST["marca"]);
    $car->set_cor($_POST["cor"]);
    $car->set_modelo($_POST["modelo"]);
    $car->set_preco($_POST["preco"]);

    //retorno dos valores
    echo nl2br($car->get_marca()."\n");
    echo nl2br($car->get_cor()."\n");
    echo nl2br($car->get_modelo()."\n");
    echo nl2br($car->get_preco()."\n");
?>