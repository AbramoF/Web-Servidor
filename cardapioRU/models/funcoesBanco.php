<?php

class funcoesBanco
{

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
            $query = $bd->prepare("UPDATE linkcalendario SET link = :link WHERE id_link=0");
            $query->bindParam(':link', $linkcalendario->link);
            $query->execute();
        } catch(Exception $e){
            throw new Exception('Falha ao adicionar conta!');
        }
    }

    public function insertRefeicao($refeicao, $id){
        try{
            $bd = Conexao::get();
            $query = $bd->prepare("UPDATE refeicoes SET refeicao = :refeicao, fk_dia_semana = :fk_dia_semana, fk_tipo_refeicao = :fk_tipo_refeicao WHERE id_refeicao = $id");
            $query->bindParam(':refeicao', $refeicao->refeicao);
            $query->bindParam(':fk_dia_semana', $refeicao->fk_dia_semana);
            $query->bindParam(':fk_tipo_refeicao', $refeicao->fk_tipo_refeicao);
            $query->execute();
        } catch(Exception $e){
            throw new Exception('Falha ao adicionar conta!');
        }
    }

}