<?php
    $host   = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "base_dados";

    $conn = new mysqli($host,$user,$pass,$db);

    if(!$conn){
        echo '<p>Erro ao conectar ao banco</p>';
    }

?>