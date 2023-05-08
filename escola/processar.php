<?php 
 
include_once 'conectar.php';

	$matrícula 	= isset($_POST['matrícula']) == true ?$_POST['nome']:"";
	$nome	= isset($_POST['nome']) == true ?$_POST['nome']:"";
	$email  = isset($_POST['email']) == true ?$_POST['email']:"";
	$celular  = isset($_POST['celular']) == true ?$_POST['celuar']:"";
	//inserir dados no banco de dados.

	$sql = "INSERT INTO turma2a (matrícula, nome, email, celular) VALUES ('$matrícula', '$nome', '$email', '$celular')";

		if ($conn->query($sql) == TRUE) {

			header('Location: form-exibir.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>