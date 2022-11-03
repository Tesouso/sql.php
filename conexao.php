<?php
require_once 'config.php';

class Conexao{
    public static function conectar(){ // criar uma nova conexao com o banco
        $conn = new PDO(DB_DRIVE . ":host=". NOME_SERVIDOR . ";dbname=" . NOME_BANCO, USUARIO, SENHA); //colocar o modo de erros do PDO em exeception
        $conn->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION); //devolver uma conexao pronta
        return $conn;
    }
}
?>