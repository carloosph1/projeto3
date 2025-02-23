<?php

    include('conexao.php');

    //Recebe o código do aluno, via GET
    $codigo = htmlspecialchars($_GET['codigo']);

    if($conn){
        //Executa o sql de Delete para deletar o aluno a partir do código passado
        $sql = "DELETE FROM tb_contas WHERE cod_conta='$codigo'";
        if($conn->query($sql) === true){
            //Chama outra página
            header('Location: ../contas.php');
        }
    }

?>