<?php
    //insere classe
    include_once'quarto_cicloSI.class.php';

    /*criação de objeto ou variável de instância
    do tipo da classe: "SI"*/
    $SI = new quarto_cicloSI;

    //atribuição de valores aos atributos
    $SI->set_materia($_POST["materia"]);
    $SI->set_professor($_POST["professor"]);
    $SI->set_fatec($_POST["fatec"]);
    $SI->set_quantidade_alunos($_POST["quantidade_alunos"]);
    $SI->set_periodo($_POST["periodo"]);

    //retorno dos valores
    echo nl2br($SI->get_materia()."\n");
    echo nl2br($SI->get_professor()."\n");
    echo nl2br($SI->get_fatec()."\n");
    echo nl2br($SI->get_quantidade_alunos()."\n");
    echo nl2br($SI->get_periodo()."\n");
?>