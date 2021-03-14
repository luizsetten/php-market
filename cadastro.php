<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concessionária - Gerenciamento de Veículos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
  <script src="js/cadastro.js" defer></script>
</head>

<body>
  <div class="container my-3 ">
    <?php
    include "cabeçalho.php";
    ?>

    <?php
    include "navbar.php";
    ?>
    <form id="formVeiculo" method="POST" action="./utils/store.php" class="row" enctype="multipart/form-data">
      <div class="form-group col-md-12">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira o nome do produto">
        <div class="alert-danger w-100 p-2 d-none">Nome inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Preço de Compra:</label>
        <input type="text" step="0.01" name="precoCompra" id="precoCompra" class="form-control" placeholder="Insira o preço do modelo">
        <div class="alert-danger w-100 p-2 d-none">Preço de Compra inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Preço de Venda:</label>
        <input type="text" step="0.01" name="precoVenda" id="precoVenda" class="form-control" placeholder="Insira o preço do modelo">
        <div class="alert-danger w-100 p-2 d-none">Preço de Venda inválido</div>
      </div>
      <div class="form-group col-md-12 text-right">
        <button type="submit" class="btn btn-primary">
          Cadastrar Produto
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