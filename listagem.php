<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concessionária - Gerenciamento de Veículos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container my-3 ">
    <?php include "cabeçalho.php"; ?>
    <?php include "navbar.php"; ?>
    <?php include "./utils/mysql_connect.php"; ?>

    <section>
      <header class="card-header p-3 mb-3">
        <h2>Veja os nossos veículos</h2>
      </header>
      <?php
      if (!isset($_POST['id']) && !empty($_POST['id'])) {
        $idDelete = $_POST['id'];
        $queryDelete = sprintf("DELETE FROM carros WHERE id=$idDelete");
        $removed = mysqli_query($con, $queryDelete) or die(mysqli_error($con));
        print($removed);
        return;
      }

      $query = sprintf("SELECT * FROM carros"); //Não retorna nada pq o banco ta vazio
      //$dados = mysqli_query($con, $query2) or die(mysqli_error($con));
      $dados = mysqli_query($con, $query) or die(mysqli_error($con));
      $total = mysqli_num_rows($dados);
      ?>
      <?php

      for ($i = 0; $i < $total; $i++) {
        $linha = mysqli_fetch_assoc($dados);
        // echo '<pre>';
        // print_r($linha);
        // echo '</pre>';
        $id = $linha['id'];
        $marca = $linha['marca'];
        $preco = $linha['preco'];
        $cor = $linha['cor'];
        $descricao = $linha['descricao'];
        $modelo = $linha['modelo'];
        $foto = $linha['foto'];
        $ano = $linha['ano'];
        // print($preco);
      ?>
        <div class="card p-2 my-3">
          <div class="row">
            <div class="col-md-3">
              <img src="<?= 'data:image/jpeg;base64,' . base64_encode($foto) ?>" class="img-thumbnail img-fluid">
            </div>
            <div class="col-md-9 p-3">
              <h3><?= $modelo ?></h3>
              <p>
                <strong>Marca:</strong> <?= $marca ?><br>
                <strong>Ano:</strong> <?= $ano ?><br>
                <strong>Preço:</strong> R$<?php echo number_format($preco, 2, ',', '.'); ?><br>
                <strong>Cor:</strong> <?= $cor ?>
              </p>
              <p>
                <?= $descricao ?>
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