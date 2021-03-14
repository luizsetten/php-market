<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercado - Listagem de produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
    .busca {
      margin-left: auto;
      transform: translateX(-20%);

    }

    .lupa {
      font-size: 20px;
    }
  </style>

</head>

<body>


  <div class="container my-3 ">
    <?php include "cabeçalho.php"; ?>
    <?php include "navbar.php"; ?>
    <?php include "./utils/mysql_connect.php"; ?>

    <section>
      <header class="card-header p-3 mb-3">
        <div class="row">
          <h2>&nbsp;Listagem de produtos </h2>
          <form method="POST" class="row busca">
            <input type="text" width="30%" id="busca" name="busca" value="<?= $termo ?? '' ?>" aria-describedby="emailHelp">
            <button type="submit" class="btn btn-primary lupa">&#x2315;</button>
          </form>
        </div>
      </header>
      <?php

      if (!isset($_POST['id']) && !empty($_POST['id'])) {
        $idDelete = $_POST['id'];
        $queryDelete = sprintf("DELETE FROM Produto WHERE id=$idDelete");
        $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
        print($removed);
        return;
      }
      $total = 0;

      if (isset($_POST['busca'])) {
        $termo = filter_var($_POST['busca'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        if (!empty($termo)) {
          $dados = $con->query("Select * from Produto Where Nome Like '%" . $termo . "%'");
          $total = mysqli_num_rows($dados);
        }
      } else {
        $query = sprintf("SELECT * FROM Produto"); //Não retorna nada pq o banco ta vazio
        $dados = mysqli_query($con, $query) or die(mysqli_error($con));
        $total = mysqli_num_rows($dados);
      }
      ?>
      <?php

      for ($i = 0; $i < $total; $i++) {

        $linha = mysqli_fetch_assoc($dados);
        $id = $linha['ID'];
        $nome = $linha['Nome'];
        $PreçoVenda = $linha['PreçoVenda'];
        $PreçoCompra = $linha['PreçoCompra'];
      ?>
        <div class="card p-2 my-3">
          <div class="row">
            <div class="col-md-12 p-3">
              <h3><?= $nome ?></h3>
              <p>
                <strong>Preço de Venda:</strong> <?= $PreçoVenda ?><br>
                <strong>Preço de Compra:</strong> <?= $PreçoCompra ?><br>
                <strong>Preço:</strong> R$<?php echo number_format($PreçoCompra, 2, ',', '.'); ?><br>
              </p>
              <div class="row justify-content-end">
                <div class="col-xs">
                  <form action="editar.php" class="container" method="post">
                    <input id="<?php echo $id; ?>" name="id" type="hidden" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary">Editar</button>
                  </form>
                </div>
                <div class="col-xs">
                  <form action="./utils/delete.php" class="container" method="post">
                    <input id="<?php echo $id; ?>" name="id" type="hidden" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </section>

    <hr>
    <?php include "footer.php" ?>


</body>

</html>