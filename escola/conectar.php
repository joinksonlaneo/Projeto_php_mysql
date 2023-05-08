<?php

    $conn = mysqli_connect("localhost", "root", "", "db_turmas"); //or die ("Erro de Conexão.")
    $conn->set_charset('utf8');

    if(!$conn){
            die("Falha na conexão: " . mysqli_connect_error());
        }else{
        //echo "Conexão realizada com sucesso";
    }
