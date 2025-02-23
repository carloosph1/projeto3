<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="shortcut icon" href="../curso/imgs/wooof.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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

<style>
    body{
        background-image: linear-gradient(to right, white, black 175%);
    }
    .cursos {
        padding: 30px;
        display:flex;

    }
    .card {
        width: 200px;
        height: 210px;
        margin:10px;
        box-shadow: 0 3px 6px rgba(0,0,0), 0 3px 6px rgba(0,0,0);
        background-image: linear-gradient(to right, white, black 120%);
    }
    .novo{
        margin:50px;
    }
    h6{
        font-size: 20px;
        font-family: georgia;
    }
    .nav-link{
        color:black;
    }
    .nav-link:active{
        position:relative;
        top:3px;
        box-shadow:none;
    }
    a{
 font-size:17px; 
   font-family: Georgia, 'Times New Roman', Times, serif;
   border-radius: 5px;
   -webkit-border-radius:8px ;
   -moz-border-radius: 5px , ;
   box-shadow: 5px 0px 5px #030101;
   border: 0px solid;
   background-color:	#D3D3D3;
   color: black;  
   margin-left:10px;
}
p{
    font-family:georgia;
    font-size:13px
}
</style>
<body>
    <ul class="nav justify-content-start" style="box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
        <li class="nav-item">
          <a class="nav-link active" href="menu.html" >Voltar</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active" href="cadastrarCurso.html">Cadastrar novo Pet</a>
        </li>
    </ul>

    <section>
        <div class="cursos">
        <?php

                    //Inclui o arquivo de conexão com o banco de dados
                    include ('./php/conexao.php');
                    //Verifica se esta conectado
                    if($conn){
                        //Executa uma instrução para pegar todos os itens da tabela
                        $sql = 'SELECT * FROM tb_curso';
                        //Atribui os resultado a uma lista
                        $resultado = $conn->query($sql);
                        //Verifica se existe mais de 1 linha
                        if($resultado->num_rows > 0){

                           //Transformar tudo dentro de uma lista
                            while($linha = $resultado->fetch_assoc()){
                                echo '<div class="card">';
                              

                                echo '<div style="margin-left: 10px; margin-top: 5px;">';
                                echo '<h6>'.$linha['nome'].'</h6><br>';
                                echo '<p> '.$linha['preco'].'</p>';
                                echo '</div>';
                                //echo '<a href="./php/deletarCurso.php?codigo='.$linha['cod_curso'].'" style="margin-left:10px;">Deletar</a>';
                                echo '</div>';
                            }
                        }else{
                            echo '<h3>Sem dados no momento</h3>';
                        }

                    }
                ?>
            
        </div>
    </section>

</body>

</html>