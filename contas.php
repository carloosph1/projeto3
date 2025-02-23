<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../curso/imgs/wooof.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    
</head>
<body>
    <style>
        body{
            background-image: linear-gradient(to right, white, black 150%);
        }         
        </style>
      
    <ul class="nav justify-content-start" style="box-shadow: 0 3px 10px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
        <li class="nav-item">
          <a class="nav-link active" href="menu.html">Voltar</a>
        </li>
      </ul>
    <div>
    <div class="tabela" style="margin-left:40px; margin-top:50px;">
        <table border="2px">

            <?php

                //Inclui o arquivo de conexão com o banco de dados
                include ('./php/conexao.php');
                //Verifica se esta conectado
                if($conn){
                    //Executa uma instrução para pegar todos os itens da tabela
                    $sql = 'SELECT * FROM tb_contas';
                    //Atribui os resultado a uma lista
                    $resultado = $conn->query($sql);
                    //Verifica se existe mais de 1 linha
                    if($resultado->num_rows > 0){

                       echo'<tr>';
                       echo'<th>  ID conta | </th>';
                       echo'<th>   Nome  | </th>';
                       echo'<th> Data nascimento  |</th>';
                        echo'<th> CPF   | </th>';
                       echo'<th>Email</th>';
                       
                       echo'</tr>';
                       //Transformar tudo dentro de uma lista
                        while($linha = $resultado->fetch_assoc()){
                            echo '<tr>';
                            echo '<td>'.$linha['id'].'</td>';
                            echo '<td>'.$linha['nome'].'</td>';
                            echo '<td>'.$linha['data_nasci'].'</td>';
                            echo '<td>'.$linha['cpf'].'</td><b>';
                            echo '<td>'.$linha['email'].'</td>';
                           //echo '<td><a href="./php/deletarAluno.php?codigo='.$linha['id'].'">Excluir</a></td>';
                            echo '</tr>';
                        }
                    }else{
                        echo '<h3>Sem dados no momento</h3>';
                    }
                }
            ?>

        </table>
    </div>

</body>
</html>