<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercado</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
  <script src="js/editar.js" defer></script>
</head>

<body>
  <div class="container my-3 ">
    <?php
    include "cabeçalho.php";
    ?>

    <?php
    include "navbar.php";
    ?>

    <?php
    include "./utils/mysql_connect.php";
    ?>

    <?php
    $id = $_POST['id'];
    $query = sprintf("SELECT * FROM produto WHERE id=$id");
    $dados = mysqli_query($con, $query) or die(mysqli_error($con));
    $objeto = mysqli_fetch_object($dados);
    ?>

    <form id="formProduto" method="POST" action="utils/update.php" class="row" enctype="multipart/form-objeto">
      <input type="hidden" name="id" id="id" value=<?= $objeto->ID ?>>
      <div class="form-group col-md-12">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?= $objeto->Nome ?>" placeholder="Insira o nome do produto">
        <div class="alert-danger w-100 p-2 d-none">Nome inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Preço de Compra:</label>
        <input type="text" step="0.01" name="preco-compra" id="preco-compra" class="form-control" value="<?= floatval($objeto->PreçoCompra) ?>" placeholder="Insira o preço do modelo">
        <div class="alert-danger w-100 p-2 d-none">Preço inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Preço de Venda:</label>
        <input type="text" step="0.01" name="preco-venda" id="preco-venda" class="form-control" value="<?= floatval($objeto->PreçoVenda) ?>" placeholder="Insira o preço do modelo">
        <div class="alert-danger w-100 p-2 d-none">Preço inválido</div>
      </div>
      <div class="form-group col-md-12 text-right">
        <button type="submit" class="btn btn-primary">
          Salvar Produto
        </button>
        <button type="reset" class="btn btn-secondary">
          Limpar
        </button>
      </div>
    </form>
    <hr>
    <?php include "footer.php" ?>
  </div>

</body>

</html>