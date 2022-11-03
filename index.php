<?php
require_once 'pessoas.php';
require_once 'conexao.php';
/*
// criando banco de dados
try{
    $conn = Conexao::conectar();
    $sql = "CREATE DATABASE IF NOT EXISTS meuPDO"; // cria o banco se ele nao existe
    $conn->exec($sql);
    echo "BANCO DE DADOS CRIAD COM SUCESSO  <br>";

}catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
//-----------------------------------------------------------------------------------------
 
// criando tabela

try {
     $conn = Conexao::conectar();
     $sql = "CREATE TABLE IF NOT EXISTS pessoas ( 
        id_pessoa INT(6) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255),
        idade INT(3), 
        data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->exec($sql);
    echo "TABELA PESSOAS CRIADA COM SUCESSO <br>";

} catch (PDOExeception $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

//-------------------------------------------------------------------------------------------------------
*/
// listando
if(isset($_GET['busca'])){
    $palavra = $_GET['busca'];
    try {
        $pessoa = new  Pessoa();
        $lista = $pessoa->listarPorNome($palavra);
   } catch (Exception $e){
       echo $e->getMessage();
   }
} else {
try {
    $pessoa = new  Pessoa();
    $lista = $pessoa->listar();
} catch (Exception $e){
   echo $e->getMessage();
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/toast.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<div id="exibe"></div>
<div class="flex-container space-between">
   <div>
    <button id="btn_criar"><a href="criar_pessoas.php"><span class="material-symbols-outlined">add</span></a></button>
   </div>  
   <div id="campo_pesquisa">     
    <form action="index.php" class="flex-container">
        <input type="search" name="buscar" id="buscar">
        <button type="submit" id="btn_pesquias"><span class="material-symbols-outlined">search</span></button>
        </form>
    </div>    
</div> 


<?php if(count($lista)>0): ?>
    <div class="flex-container">
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
            <th>registro</th>
        </tr>
        <?php foreach($lista as $item): ?> <!-- foreach para percorrer cada elemento da lista gerada e criar a tr abaixo para cada um deles-->
            <tr>
                <td><?= $item['id_pessoa'] ?></td><!--preenchendo o valor de cada td da tabela com o valor referenteao item atual indicanso sua chave-->
                <td><?= $item['nome'] ?></td>
                <td><?= $item['idade'] ?></td>
                <td><?= $item['data_registro'] ?></td>
                <td><a href="editar.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined" id="btn_edit">edit</span></a></td>
                <td><a href="delete.php?id_pessoa=<?= $item['id_pessoa'] ?>"><span class="material-symbols-outlined" id="btn_delete">delete</span></a></td>
            </tr>
            <?php endforeach ?><!-- devemos  finalizar o laço foreach-->
    </table>
    <?php else: ?>
        <p>
            NAO TEM PESSOAS CADASTRADAS
        </P>
    <?php endif ?>    
    <script src="js/script.js"></script>
</body>
</html>