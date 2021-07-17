<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />    

    <title>Dicionário</title>
</head>
<body>

    <?php 

            
  
         
            include("connection.php");
            try {
                $stmt = $pdo->prepare("select * from tbwords");
                


                if(isset($_POST['txtPesquisa'])){
                    $title = $_POST['txtPesquisa'];
                    $stmt = $pdo->prepare("select * from tbwords where titleWord = '$title'");
                
                }
                $stmt->execute();
        
               
            } 
            catch(PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            

  


        ?>

        <form method="post">
            <div id="menu">
                <ul class="nav">
                    <li class="logotipo">
                        <h1>DEVELOPER TRANSLATOR</h1>
                    </li>  
                </ul>   
                <ul class="nav">   
                    <li class="nav-item">
                        <input class="form-control mr-sm-2" name="txtPesquisa" type="search" placeholder="Pesquisar" aria-label="Pesquisar" required>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="http://localhost:8080/PwDicionario/">Limpar</a>
                    </li>
                </ul>
            </div>
        </form>  
    <center><h1 class="title">Terms</h1></center>
    <div class="conteiner">
        <div id="cards">
            <?php while($item = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                <div class="card-termo">
                    <h3><?php echo $item['titleWord'] ?></h3>
                    <p><?php echo $item['descWord'] ?><p>
                </div>

            <?php } ?>    
        </div>
    </div>  
    
    



</body>

</html>