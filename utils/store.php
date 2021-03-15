<?php include "./mysql_connect.php"; ?>

<?php

$Nome = $_POST['nome'];
$PreçoVenda = $_POST['preco-venda'];
$PreçoCompra = $_POST['preco-compra'];

$query = $con->query("INSERT INTO Produto (Nome, PreçoVenda, PreçoCompra) VALUES ('$Nome', {$PreçoVenda}, {$PreçoCompra})");
header("Location: ../listagem.php");
die();
?>