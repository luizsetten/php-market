<?php include "./mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
	$idUpdate = $_POST['id'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$ano = $_POST['ano'];
	$preco = $_POST['preco'];
	$cor = $_POST['cor'];
	$descricao = $_POST['descricao'];
	$imagem = $_FILES['foto'];

	$nomeFinal = '../tmp/' . time() . '.jpg';
	if (isset($_FILES['foto']) && !empty($_FILES['foto']) && move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);
		$imgContent = addslashes(file_get_contents($nomeFinal));

		$queryDelete = sprintf("DELETE FROM carros WHERE id=$idUpdate");
		$removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));

		$query = $con->query("INSERT INTO carros (id, marca, modelo, ano, preco, cor, descricao, foto) VALUES ('$idUpdate', '$marca', '$modelo', {$ano}, {$preco}, '$cor', '$descricao', '$imgContent')");
		unlink($nomeFinal);
	} else {
		$queryUpdate = sprintf("UPDATE carros SET marca=\"{$_POST['marca']}\", modelo=\"{$_POST['modelo']}\", ano=\"{$_POST['ano']}\", preco=\"{$_POST['preco']}\", cor=\"{$_POST['cor']}\", descricao=\"{$_POST['descricao']}\"  WHERE id=$idUpdate");
		$updated = mysqli_query($con, $queryUpdate) or die(mysqli_error($con));
		// $query = $con->query("INSERT INTO carros (marca, modelo, ano, preco, cor, descricao) VALUES ('$marca', '$modelo', {$ano}, {$preco}, '$cor', '$descricao')");
	}
}
header("Location: ../listagem.php");
die();
?>