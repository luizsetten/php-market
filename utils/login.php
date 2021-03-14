<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

include "./mysql_connect.php";

$result = mysqli_query($con, "SELECT * FROM `Usuário`
WHERE `Email` = '$login' AND `Senha`= '$senha'");

if (mysqli_num_rows($result) > 0) {
  $_SESSION['Email'] = $Email;
  $_SESSION['Senha'] = $Senha;
  header('location: ../home.php');
} else {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: ../index.php');
}
