<?php

class Usuario{
    private $id_usuario;
    private $usuario;
    private $senha;
    private $role;

    public function __get($propriedade)
    {
        return $this->$propriedade;
    }

    public function __set($propriedade, $valor)
    {
        $this->$propriedade = $valor;
    }
}