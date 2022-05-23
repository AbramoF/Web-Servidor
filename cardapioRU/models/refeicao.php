<?php

class refeicao{
    private $id_refeicao;
    private $refeicao;
    private $fk_dia_semana;
    private $fk_tipo_refeicao;

    public function __get($propriedade)
    {
        return $this->$propriedade;
    }

    public function __set($propriedade, $valor)
    {
        $this->$propriedade = $valor;
    }
}