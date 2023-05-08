<head>
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<div class="container-sm">
    <h1>Consulta de Registro</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
              <!-- <th scope="col">ID</th> -->
               <th scope="col">Matrícula</th>
               <th scope="col">Nome</th>
               <th scope="col">Email</th>
               <th scope="col">Celular</th>
            </tr>
            
        </thead>
        <tbody>
            <?php include_once 'consultar.php' ?>

            <tr>
                <a href= "form-exibir.php"> Adicionar Dados</a>
            </tr>
            
        </tbody>
    </table>