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
      <div class="form-group col-md-6">
        <label>Marca:</label>
        <select id="marca" name="marca" class="form-control custom-select">
          <option value="">-- Selecionar --</option>
          <option value="Chevrolet">Chevrolet</option>
          <option value="Ford">Ford</option>
          <option value="Hyiundai">Hyiundai</option>
        </select>
        <div class="alert-danger w-100 p-2 d-none">Marca é obrigatório</div>
      </div>
      <div class="form-group col-md-6">
        <label>Modelo:</label>
        <input type="text" id="modelo" name="modelo" class="form-control" value="" placeholder="Insira o nome do modelo">
        <div class="alert-danger w-100 p-2 d-none">Modelo inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Ano:</label>
        <input type="number" id="ano" name="ano" class="form-control" value="" placeholder="Insira o ano do modelo">
        <div class="alert-danger w-100 p-2 d-none">Ano inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Preço:</label>
        <input type="text" id="preco" name="preco" class="form-control" value="" placeholder="Insira o preço do modelo">
        <div class="alert-danger w-100 p-2 d-none">Preço inválido</div>
      </div>
      <div class="form-group col-md-6">
        <label>Foto:</label>
        <!-- <input type="text" id="foto" name="foto" class="form-control" value="" placeholder="Insira o nome da foto"> -->
        <input type="file" id="foto" name="foto" class="form-control" accept="image/x-png,image/jpeg" />
        <div class="alert-danger w-100 p-2 d-none">Foto é obrigatório</div>
      </div>
      <div class="form-group col-md-6">
        <label>Cor:</label>
        <select id="cor" name="cor" class="form-control custom-select">
          <option value="">-- Selecionar --</option>
          <option value="Preto">Preto</option>
          <option value="Branco">Branco</option>
          <option value="Prata">Prata</option>
          <option value="Vermelho">Vermelho</option>
        </select>
        <div class="alert-danger w-100 p-2 d-none">Cor é obrigatório</div>
      </div>
      <div class="form-group col-md-12">
        <label>Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Insira a descrição do veículo"></textarea>
        <div class="alert-danger w-100 p-2 d-none">Descrição é obrigatório</div>
      </div>
      <div class="form-group col-md-12 text-right">
        <button type="submit" class="btn btn-primary">
          Cadastrar Veículo
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