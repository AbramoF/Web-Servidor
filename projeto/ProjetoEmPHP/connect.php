<?php

try 
{

    $bd = new mysqli('localhost', 'root', '', 'WebServidor');
    $bd -> set_charset('utf-8');

}catch(Exception $e)
{
    throw new Exception('Erro de Conexão com o Banco: ' + $e -> getMessage());
}
