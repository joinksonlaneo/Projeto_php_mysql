<?php 

	include_once 'conectar.php';

	$id = $_GET['id'];

	$deletar = $conn->query("DELETE from turma2a where id='$id'");

	if (mysqli_affected_rows($conn) > 0) {

		header("Location:form-exibir.php");
	}
?>