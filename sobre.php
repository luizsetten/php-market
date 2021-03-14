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
    <?php
    include "cabeçalho.php";
    ?>

    <?php
    include "navbar.php";
    ?>

    <section class="card">
      <header class="card-header p-3">
        <h2>Sobre nós</h2>
      </header>
      <div class="card-body p-3">
        <img src="./images/luiz.jpg" class="img-thumbnail float-left mr-3" style="width: 200px; height: 200px;">
        <p>
          <strong>Nome:</strong> Luiz Gustavo Chinelato Setten <br>
          <strong>E-mail:</strong> luiz.setten@ifsuldeminas.edu.br<br>
          <strong>Curso:</strong> Engenharia de computação <br>
          <strong>Período:</strong> 8°Período
        </p>
        <strong>MINICURRÍCULO:</strong>
        <p>Aluno do IFSULDEMINAS - Campus poços de Caldas e também sou estágiário na empresa FBenevides, atuo como desenvolvedor de software fullstack.</p>
        <p>Tenho conhecimentos em: Node.js, ReactJS, React Native, Material-UI, Redux-Saga, Amazon Web Services, AdonisJS, Docker, Git, BitBucket, Pipelines, integração contínua e métodos ágeis.</p>
        <p>Atualmente estou estudando: Elixir e também estou aprofundando meus conhecimentos de inglês.</p>
      </div>
      <div class="card-body p-3">
      <img src="./images/pedro.jpg" class="img-thumbnail float-left mr-3" style="width: 200px; height: 200px;">
        <p>
          <strong>Nome:</strong> Pedro Henrique Borges Prado <br>
          <strong>E-mail:</strong> pedro.prado@ifsuldeminas.edu.br<br>
          <strong>Curso:</strong> Engenharia de computação <br>
          <strong>Período:</strong> 8°Período
        </p>
        <strong>MINICURRÍCULO:</strong>
        <p>Aluno do IFSULDEMINAS - Campus poços de Caldas e técnico em hardware pela Microcamp.</p>
        <p>Tenho conhecimentos em: Node.js, ReactJS, React Native, Git, Kotlin e Scrum.</p>
        <p>Atualmente estou estudando:  Kotlin, uma linguagem de programação multiplataforma derivada do Java.</p>
      </div>
    </section>

    <hr>
    <?php include "footer.php" ?>
  </div>

</body>

</html>