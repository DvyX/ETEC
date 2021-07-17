<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu Cybertec - Obras</title>
</head>
<body>
        <?php 
        try {
        require_once 'obra.php';
            $obra = new Obra();
            $lista = $obra->Listar();
        }catch(Exception $e){
            echo '<pre>';
            print_r($e);
             echo '</pre>';
            echo $e->getMessage();
        }
        ?>
    <table class = 'table'>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Período</th>
                    <th>Autor</th>
                </tr>
            </thead>
        <tbody id='resultado'>
                <?php foreach ($lista as $linha){ ?>
                    <tr>
                        <td><img src=' <?php echo ($linha['imageurl']) ?> '
                             width='200' heigth='200'></td>
                        <td><?php echo $linha['nomeObra'] ?></td>
                        <td><?php echo $linha['categoriaObra'] ?></td>
                        <td><?php echo $linha['periodoObra'] ?></td>
                        <td><?php echo $linha['nomeautor'] ?></td>
                    </tr>
                <?php } ?>
        </tbody>
        </table>
   <a href="home.php">voltar</input>
</body>
</html>