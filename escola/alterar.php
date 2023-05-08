<?php

include_once 'conectar.php';
include_once 'form-editar.php';

$id = $_GET['id'];
$matrícula = isset($_POST ['matrícula'])?$_POST['matrícula']:"";
$nome = isset($_POST['nome'])?$_POST['nome']:"";
$email = isset ($_POST['email'])?$_POST['email']:"";
$celular = isset ($_POST['celular'])?$_POST['celular']:"";

$alterar = $conn->query("UPDATE turma2a set matrícula ='$matrícula', nome ='$nome', email='$email', celular ='$celular' where id='$id'");
$alterar = $conn->query("UPDATE turma2a");
if(mysqli_affected_rows($conn) > 0){
    header("location: form-exibir.php");
    
}
