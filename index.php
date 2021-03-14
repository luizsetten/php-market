<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concessionária - Gerenciamento de Veículos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <style type="text/css">
    .login {
      margin-top: 20vh;
      margin-left: 50vw;
      width: 30%;
      border: 1px solid gray;
      border-radius: 10px;
    }

    .button {
      margin-top: 20px;
      text-align: center;
    }

    .spaceX {
      height: 80px;
    }
  </style>
</head>

<body>

  <div class="login">
    <div class="container">

      <form action="./utils/login.php" method="POST">
        <div class="form-group ">
          <img src="images/logo.png" width="100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input type="password" class="form-control" name="Senha" id="exampleInputPassword1">
        </div>
        <div class="button">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <div class="spaceX">
        </div>
      </form>
    </div>
  </div>

</body>

</html>