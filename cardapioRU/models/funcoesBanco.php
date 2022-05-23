<?php

class funcoesBanco
{
    public function insertRefeicao($refeicao){
        $bd = Conexao::get();
    }

    public function buscarPorUsuario($usuario){
        $bd = Conexao::get();
            $query = $bd->prepare("SELECT * FROM usuario WHERE :usuario = usuario");
            $query->bindParam(':usuario', $usuario);
            $query->execute();
            $usuario = $query->fetchObject('Usuario');
            return $usuario;
    }

    public function buscarLink(){
        $bd = Conexao::get();
            $query = $bd->query("SELECT * FROM linkcalendario");
            $link = $query->fetchObject('link');
            return $link;
    }

    public function insertLink($linkcalendario){
        try{
            $bd = Conexao::get();
            $query = $bd->prepare("UPDATE linkcalendario SET link = :link WHERE link = :link");
            $query->bindParam(':link', $linkcalendario->link);
            $query->execute();
        } catch(Exception $e){
            throw new Exception('Falha ao adicionar conta!');
        }
    }

}