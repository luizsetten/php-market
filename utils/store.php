<?php include "./mysql_connect.php"; ?>

<?php

$Nome = $_POST['Nome'];
$PreçoVenda = $_POST['PreçoVenda'];
$PreçoCompra = $_POST['PreçoCompra'];

$query = $con->query("INSERT INTO Produto (Nome, PreçoVenda, PreçoCompra) VALUES ({$Nome}, {$PreçoVenda}, {$PreçoCompra})");

header("Location: ../listagem.php");
die();
?>