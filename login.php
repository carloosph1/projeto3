<?php
    include('conexao.php');

    if($conn){
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);

            $sql = 'SELECT * FROM tb_contas';
            $resultado = $conn->query($sql);
            if($resultado->num_rows > 0){
                while($linha = $resultado->fetch_assoc()){
                    if($email == $linha['email'] && $senha == $linha['senha']){
                        header('Location: ../areaAluno.php');
                        break;
                    }else if($email == "adm@gmail.com" && $senha == "1234"){
                        header('Location:../menu.html'); 
                    }else{
                        header('Location:../index.html');
                    }
            }
        }
    }
?>