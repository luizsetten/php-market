<?php
session_start();

$login = $_POST['Email'];
$senha = $_POST['Senha'];

include "./mysql_connect.php";

$termoLogin = filter_var($login, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$termoSenha = filter_var($senha, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

$result = mysqli_query($con, "SELECT * FROM `Usuário`
WHERE `Email` = '$termoLogin' AND `Senha`= '$termoSenha'");

print_r($_POST);
print_r($result);
if (mysqli_num_rows($result) > 0) {
  $_SESSION['Email'] = $login;
  $_SESSION['Senha'] = $senha;
  header('location: ../listagem.php');
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: ../error.php');
  
}
