<?php
require_once 'pessoas.php';
require_once 'conexao.php';

$id_pessoa = $_GET['id_pessoa'];

try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->delete();

    setcookie("deletado", true);
    header("Location: index.php");
} catch (PDOExeception $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>