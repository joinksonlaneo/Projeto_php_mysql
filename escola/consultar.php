<?php 
    include_once 'conectar.php';
    
    $consultar = $conn->query("SELECT * from turma2a");
    
    while ($dados = $consultar->fetch_assoc()){
        $id =           $dados['id'];
        $matrícula =    $dados['matrícula'];
        $nome =         $dados['nome'];
        $email =        $dados['email'];
        $celular =      $dados['celular'];
    
        echo "<tr>";
             echo
             "<td>$id<td>$matrícula<td>$nome<td>$email<td>$celular";

             echo "<td><a href='form-editar.php?id=$id' >Editar</a>";
             echo "<td><a href='delete.php?id=$id' >Excluir</a>";
        echo "</tr>";
    
    }