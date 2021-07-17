<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 3 - Salário</title>
    </head>
    <body>
        <a href="index.php">
            <button class="btn-confirm" type="button">Voltar</button>
        </a>
        <center>
            <br>
            <form action="CodigoSalario3.php" method="post">
                <label>Digite o Salário:</label>
                <input type="text" name="txtSalario" id="txtSalario">
                <br><br>
                <label>Selecione o Departamento:</label>
                <br>
                <input type="radio" name="rdDepartamento" id="rdDepartamento" value="Operacional">
                <label>Operacional</label>
                <br>
                <input type="radio" name="rdDepartamento" id="rdDepartamento" value="Desenvolvimento">
                <label>Desenvolvimento</label>
                <br><br>
                <button type="submit">Enviar</button>
            </form>
        </center>
    </body>
</html>