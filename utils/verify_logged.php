<?php
session_start();
if ((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true)) {
  unset($_SESSION['Email']);
  unset($_SESSION['Senha']);
  header('location: ./index.php');
}

$logado = $_SESSION['Email'];
