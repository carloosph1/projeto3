<?php
    include('conexao.php');

    if($conn){
        $titulo = htmlspecialchars($_POST['titulo_curso']);
        $preco_curso = htmlspecialchars($_POST['preco_curso']);
        $url_curso = htmlspecialchars($_POST['url_curso']);


        $sql = "INSERT INTO tb_curso (nome, preco, url_c) VALUES('$titulo','$preco_curso','$url_curso')";
        if($conn->query($sql) === true){
            header('Location: ../cursos.php');
        }
    }
?>