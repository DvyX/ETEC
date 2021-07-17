<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Euro Truck - Registro</title>
    </head>
    <body>
        <center>
            <h2>PREENCHA O FORMULÁRIO PARA CONCLUIR A VERIFICAÇÃO</h2>
            <form method="post" action="codigoRegistro.php">
                <label>Nome:</label>
                <input type="text" id="txtNome" name="txtNome">
                <label>CPF: </label>
                <input type="text" id="txtCPF" name="txtCPF">
                <br>
                <br>
                <label>Ano Nascimento: </Label>
                <input type="number" id="anoNascimento" name="anoNascimento">
                <br>
                <br>
                <label>Categoria: </label>
                <select id="slcCategoria" name="slcCategoria">
                    <option value="1">Moto</option>
                    <option value="2">Veículo</option>
                    <option value="3">Transporte Remunerado</option>
                    <option value="4">Caminhão</option>
                    <option value="5">Ônibus / Mega Caminhão</option>
                </select>
                <button type="submit">Enviar</button>
            </form>
        </center>
    </body>
</html>