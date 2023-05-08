<?php

    //Conexão com o banco de dados
    include_once 'conectar.php';

    //Criação de variáveis
    $matrícula = isset($_POST['matrícula']) == true ?$_POST['matrícula']:"";
    $nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
    $email = isset($_POST['email']) == true ?$_POST['email']:"";
    $celular = isset($_POST['celular']) == true ?$_POST['celular']:"";

    //$sql = "INSERT INTO tb_cadastro (nome, num, cargo) VALUE ('$nome', '$num', $cargo')";
    //Inserir dados ao fomulário para o banco de dados
    $sql = "INSERT INTO turma2a (matrícula, nome, email, celular)
    VALUE ('$matrícula', '$nome', '$email', '$celular')";
    
    if ($conn->query($sql) == TRUE) {
        header('Location: form-escola.php');

    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }
        $conn->close();