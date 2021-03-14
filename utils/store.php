<?php include "./mysql_connect.php"; ?>

<?php

// $id = $_POST['id'];
print "<pre>";
print_r($_POST);
print "</pre>";
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$ano = $_POST['ano'];
$preco = $_POST['preco'];
$cor = $_POST['cor'];
$descricao = $_POST['descricao'];
$imagem = $_FILES['foto'];
if ($imagem != NULL) {
  $nomeFinal = '../tmp/' . time() . '.jpg';
  if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);
    $imgContent = addslashes(file_get_contents($nomeFinal));

    $query = $con->query("INSERT INTO carros (marca, modelo, ano, preco, cor, descricao, foto) VALUES ('$marca', '$modelo', {$ano}, {$preco}, '$cor', '$descricao', '$imgContent')");
    unlink($nomeFinal);
  } else {
    $query = $con->query("INSERT INTO carros (marca, modelo, ano, preco, cor, descricao) VALUES ('$marca', '$modelo', {$ano}, {$preco}, '$cor', '$descricao')");
  }
} else {
  echo "Você não realizou o upload de forma satisfatória.";
  return;
}

header("Location: ../listagem.php");
die();
?>