<?php include "./mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
	$idUpdate = $_POST['id'];
	$Nome = $_POST['nome'];
	$PrecoVenda = $_POST['preco-venda'];
	$PrecoCompra = $_POST['preco-compra'];

	$queryUpdate = sprintf("UPDATE Produto SET Nome=\"{$Nome}\", PreçoVenda=\"{$PrecoVenda}\", PreçoCompra=\"{$PrecoCompra}\" WHERE ID=$idUpdate");
	$updated = mysqli_query($con, $queryUpdate) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();
?>