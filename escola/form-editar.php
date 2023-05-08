<?php include_once 'conectar.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		include_once 'conectar.php';

		$id = $_GET['id'];
	
		$consultar = $conn->query("SELECT * from turma2a where id='$id'");

		while($dados = $consultar->fetch_assoc()){
			$matrícula   = $dados['matrícula'];
			$nome	= $dados['nome'];
			$email 	= $dados['email'];
            $celular = $dados['celular'];
		}
	?>
					<div>ALTERAR DADOS</div>

    				<form action="alterar.php?id=<?php echo $id;?>"method="post">

    					<label for="matrícula">Matrícula:</label>
    					<input type="text" name="matrícula" value="<?php echo $matrícula;?>">
    						
    					<label for="nome">Nome:</label>
    					<input type="text" name="nome" value="<?php echo $nome;?>">
    					<label for="email">Email:</label>
    					<input type="text" name="email" value="<?php echo $email;?>">

                        <label for="celular">Celular:</label>
    					<input type="text" name="celular" value="<?php echo $celular;?>">

    					<br>
    					<input type="submit" name="btn" value="ALTERAR">
    					<a href="form-exibir.php">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>