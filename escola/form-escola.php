<?php
    include_once 'conectar.php';   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro Escola de turma</title>
</head>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<body>
    <div class="container-md">
<h1>Cadastro de turma.</h1>

  
<form action="inserir.php" method="post" name="form-cad">
    <div class="mb-3">
        <label for="matrícula" class="form-label">Matrícula</label>
        <input class="form-control" type="text" name="matrícula" id="matrícula" class="valid-feedback">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input class="form-control" type="email" name="email" id="email">
 <label for="matrícula"></label>
 </div>
 <div class="mb-3">
    <label for="celular" class="form-label">Celular</label>
    <input class="form-control" type="phone" name="celular" id="cel">
</div>
 <input class="btn btn-dark" type="submit" value="Enviar">
</form></div>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery.min.js"></script>
</body>
</html>