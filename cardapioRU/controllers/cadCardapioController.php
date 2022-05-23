<?php

class cadCardapioController{
    public function SendCardapio(){
        if(!isset($_SESSION)) 
        { 
            session_start();
        }
        $cont1 = 0;
        $cont =  $_POST['dia'].$_POST['value'];
        $cont1 = 5*$cont;

        { //Para Salada 1
            $ref = $_POST['sal1'].$_POST['value'];
            $refeicao = new refeicao;
            $bdf = new funcoesBanco();
            $refeicao->id_refeicao = 0+$cont1;
            $refeicao->refeicao = $ref;
            $refeicao->fk_tipo_refeicao = 0;
            $refeicao->fk_dia_semana = $_POST['dia'].$_POST['value'];
            $bdf->insertRefeicao($refeicao, $refeicao->id_refeicao);
        }

        { //Para Salada 2
            $ref2 = $_POST['sal2'].$_POST['value'];
            $refeicao2 = new refeicao;
            $bdf2 = new funcoesBanco();
            $refeicao2->id_refeicao = 1+$cont1;
            $refeicao2->refeicao = $ref2;
            $refeicao2->fk_tipo_refeicao = 1;
            $refeicao2->fk_dia_semana = $_POST['dia'].$_POST['value'];
            $bdf2->insertRefeicao($refeicao2, $refeicao2->id_refeicao);
        }

        { //Para Carne
            $ref3 = $_POST['carn'].$_POST['value'];
            $refeicao3 = new refeicao;
            $bdf3 = new funcoesBanco();
            $refeicao3->id_refeicao = 2+$cont1;
            $refeicao3->refeicao = $ref3;
            $refeicao3->fk_tipo_refeicao = 2;
            $refeicao3->fk_dia_semana = $_POST['dia'].$_POST['value'];
            $bdf3->insertRefeicao($refeicao3, $refeicao3->id_refeicao);
        }

        { //Para Vegetariano
            $ref4 = $_POST['veg'].$_POST['value'];
            $refeicao4 = new refeicao;
            $bdf4 = new funcoesBanco();
            $refeicao4->id_refeicao = 3+$cont1;
            $refeicao4->refeicao = $ref4;
            $refeicao4->fk_tipo_refeicao = 3;
            $refeicao4->fk_dia_semana = $_POST['dia'].$_POST['value'];
            $bdf->insertRefeicao($refeicao4, $refeicao4->id_refeicao);
        }

        { //Para Acompanhamento
            $ref5 = $_POST['acomp'].$_POST['value'];
            $refeicao5 = new refeicao;
            $bdf5 = new funcoesBanco();
            $refeicao5->id_refeicao = 4+$cont1;
            $refeicao5->refeicao = $ref5;
            $refeicao5->fk_tipo_refeicao = 4;
            $refeicao5->fk_dia_semana = $_POST['dia'].$_POST['value'];
            $bdf5->insertRefeicao($refeicao5, $refeicao5->id_refeicao);
        }

        header("Location: /Cardapio");
    }

}