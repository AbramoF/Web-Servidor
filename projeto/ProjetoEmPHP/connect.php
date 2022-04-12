<?php

class Conexao {
    private static $bd;

    public static function get() {
        try {
            if(!isset(self::$bd))
                self::$bd = new PDO("mysql:host=localhost;dbname=WebServidor", "root", "");
            return self::$bd;
        } catch(Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}