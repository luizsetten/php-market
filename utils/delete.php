<?php include "./mysql_connect.php"; ?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
  $idDelete = $_POST['id'];
  $queryDelete = sprintf("DELETE FROM Produto WHERE id=$idDelete");
  $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
}
header("Location: ../listagem.php");
die();

?>