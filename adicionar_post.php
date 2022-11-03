<?php
require_once 'pessoas.php';
require_once 'conexao.php';
// o codigo acima recebe o que vem no post e guarda nas variaveis
try {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
// criar novo objeto da classe pessoa 
    $pessoa = new Pessoa();
// vincular os atributos da classe com as variaveis
    $pessoa->nome = $nome;
    $pessoa->idade = $idade;

    $pessoa->inserir();
// insere
    setcookie("adicionado", true);
    header("Location: index.php");
}catch (Exception $e){
    echo $e->getMessage();
}
?>