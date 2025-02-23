<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOOF PETS</title>

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
        background-image: linear-gradient(to right, white, black 220%);
    }   
    .cursos {
        padding: 30px;
        display:flex;
    }
    .card {
        width: 250px;
        height: 230px;
        margin:10px;
        box-shadow: 0 3px 6px rgba(0,0,0), 0 3px 6px rgba(0,0,0);
        background-image: linear-gradient(to right, white, black 140%);
    }
    .novo{
        margin:50px;
    }
    .justify-content-start{       
    background: rgb(255, 255,240,.2);
    box-shadow: 0 5px 15px rgb(0,0,0,.5); 
    }
    .ent{
    font-size:17px;   
    font-family: arial; 
    box-shadow: 0px 5px 5px ; 
    width: 83px;
    border-radius: 25% 0;     
    text-transform: uppercase;   
    border:none;   
    cursor: pointer;
    display:inline-block;
    text-decoration: none; 
    font-weight: bold;                                                                              
    }
    .ent:hover{
        position:relative;
        top:3px;
        box-shadow:none;
    }
    .ent:active{
        position:relative;
        top:5px;
    }
    h6{
        font-size:20px;
        font-family:georgia;
        color:black;        
        font-weight: bold;  
        color:#000.023;
    }
    p{
        font-size:14px;
        font-family:georgia;
        color:#000;
        text-align:center;
        font-style:oblique;    
    }
    .nav-link{
    margin-left:20px;
    font-size: 18px; 
    font-family: Georgia, 'Times New Roman', Times, serif;
    border-radius: 5px;
    -webkit-border-radius:5px ;
    -moz-border-radius: 3px , ;
    box-shadow: 2px 0px 5px ;
    border: 0px solid;
    background-color: #000;
    color: white;
    }
    .nav-link:active{
        position:relative;
        top:3px;
        box-shadow:none;
    }
</style>
    <ul class="nav justify-content-start"  >
        <li class="nav-item">
          <a class="nav-link active" href="index.html" >Sair</a>
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
                                echo '<div style=" color: black;margin-left: 1px;  margin-top: 6px;">';
                                echo '<h6><center>'.$linha['nome'].'</h6> <br>';
                                echo '<p> '.$linha['preco'].'</p>';
                                echo '</div>';
                                echo '<a class="ent" target="_blank" href="https://www.instagram.com/'.$linha['url_c'].'" style="margin-left:5px;  font-size="20px";">Entrar</a>';
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