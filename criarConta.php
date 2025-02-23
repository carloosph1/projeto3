<?php
    include('conexao.php');

    if($conn){
        $nome = htmlspecialchars($_POST['nome']);
        $data_nasci = htmlspecialchars($_POST['data_nasci']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);


        $sql = "INSERT INTO tb_contas (nome,data_nasci,cpf,email,senha) VALUES('$nome','$data_nasci','$cpf','$email','$senha')";
        if($conn->query($sql) === true){
            header('Location: ../formulario.html');
        }
    }
?>