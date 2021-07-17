<!doctype html>

<head>
    <meta charset="utf-8">

    <title>Exercicio 2</title>


</head>

<body>

    <form action="cadastro.php" method="post">
        <br>
        <label>Nome</label>
        <input type="text" name="txtNome" id="txtNome">
        <br>
        <label>Cpf:</label>
        <input type="text" name="txtCpf" id="txtCpf">
        <br>
        <label>Data de Nascimento:</label>
        <input type="date" name="dtNasc" id="dtNasc">
        <br>
        <label>RG:</label>
        <input type="number" name="numRg" id="numRg">
        <br>
        <label>Turma:</label>
        <select name="slTurma" id="slTurma">
            <option value="0" selected disabled>Selecione</option>
            <option value="1">1A</option>
            <option value="2">1B</option>
            <option value="3">2A</option>
            <option value="4">2B</option>
        </select>
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>