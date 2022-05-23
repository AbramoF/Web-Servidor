<?php

class funcoesBanco
{
    public function insertRefeicao($refeicao){
        $bd = Conexao::get();
    }

    public function buscarPorUsuario($usuario){ //0-Ver se existe 1-Buscar pelo email
        $bd = Conexao::get();
            $query = $bd->prepare("SELECT * FROM usuario WHERE :usuario = usuario");
            $query->bindParam(':usuario', $usuario);
            $query->execute();
            $usuario = $query->fetchObject('Usuario');
            return $usuario;
    }


}