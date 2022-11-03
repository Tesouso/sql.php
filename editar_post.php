<?php
require_once 'pessoas.php';
require_once 'conexao.php';

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
try {
    $pessoa = new Pessoa($id_pessoa);
    $pessoa->nome = $nome;
    $pessoa->idade = $idade;

    $pessoa->atualizar();

    setcookie("atualizado", true);
    header("Location: index.php");
} catch (PDOExeception $e) {
    echo $e->getMessage();
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>