<?php

$dados = mysqli_query($con, $query) or die(mysqli_error($con));
// // transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// // calcula quantos dados retornaram
$total = mysqli_num_rows($dados);

print($total); // Fazer um for com o total para iterar na tela de listagem

?>