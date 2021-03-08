<?php

    include_once 'condominio.class.php';

    $Cond = new condominio;

    $Cond->set_proprietario('Karen Livia Alves');
    $Cond->set_num_casa(02);
    $Cond->set_rua('Pirajá');
    $Cond->set_bairro('Tupi');
    $Cond->set_cidade('Santos');
    $Cond->set_estado('SP');
    $Cond->set_pais('Brasil');

    echo nl2br("Nome do proprietário: ".$Cond->get_proprietario()."\n");
    echo nl2br("Número da casa: ".$Cond->get_num_casa()."\n");
    echo nl2br("Nome da rua: ".$Cond->get_rua()."\n");
    echo nl2br("Nome do bairro: ".$Cond->get_bairro()."\n");
    echo nl2br("Nome da cidade: ".$Cond->get_cidade()."\n");
    echo nl2br("Nome do estado: ".$Cond->get_estado()."\n");
    echo nl2br("Nome do país: ".$Cond->get_pais()."\n");

?>