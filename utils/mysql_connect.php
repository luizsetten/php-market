<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "concessionaria";
$user = "root";
$pass = "password";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error($con),E_USER_ERROR);
