<?php

class IndexController{

    public function index(){
        $bf = new funcoesBanco;
        $sm = $bf->buscarRefeicao(0);
        $tm = $bf->buscarRefeicao(1);
        $qam = $bf->buscarRefeicao(2);
        $qim = $bf->buscarRefeicao(3);
        $sem = $bf->buscarRefeicao(4);
        $st = $bf->buscarRefeicao(5);
        $tt = $bf->buscarRefeicao(6);
        $qat = $bf->buscarRefeicao(7);
        $qit = $bf->buscarRefeicao(8);
        $set = $bf->buscarRefeicao(9);

        require 'views/cardapioDia.view.php';
    }
}