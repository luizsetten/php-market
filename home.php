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
    <?php include "./utils/mysql_connect.php"; ?>

    <?php include "navbar.php"; ?>
    <?php include "utils/verify_logged.php"; ?>

    <section class="card">
      <header class="card-header p-3">
        <h2>Bem-vindo(a) à nossa concessionária!</h2>
      </header>
      <div class="card-body p-3">
        <p>Estamos prontos para te receber e realizar o seu sonho do carro próprio!</p>
        <p>Horário de funcionamento:</p>
        <p>seg. à sex. - 10h às 18h</p>
        <p>sábados - 12h às 16h</p>
        <p>Endereço: Rua Pacaembu, 658 - Piracicaba, SP | Contato: (19) 3434-5522 | WhatsApp: (19) 99888-5522</p>
      </div>
    </section>

    <hr>
    <?php include "footer.php"; ?>
  </div>

</body>

</html>