<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <br>
    <form action="contidoCod.php" method="get">
        <?php
            session_start();
            $vetor = $_SESSION['$vetor'] = array(rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10), rand ( 0, 10));
            printf('Vetor: ');
            foreach ($vetor as $i => $value) {
                print_r($vetor[$i].', ');
            }
        ?>
        <br>
        <label>Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <br>
        <button type="submit">Verificar</button>
    </form>
</body>

</html>