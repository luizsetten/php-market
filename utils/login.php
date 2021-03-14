<?php
session_start();

$login = $_POST['Email'];
$senha = $_POST['Senha'];

include "./mysql_connect.php";

$result = mysqli_query($con, "SELECT * FROM `Usuário`
WHERE `Email` = '$login' AND `Senha`= '$senha'");

print_r($_POST);
print_r($result);
if (mysqli_num_rows($result) > 0) {
  $_SESSION['Email'] = $login;
  $_SESSION['Senha'] = $senha;
  header('location: ../listagem.php');
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: ../index.php');
}
