<?php

use Dompdf\Dompdf;

require_once("dompdf/autoload.inc.php");

$dompdf = new Dompdf();

include("conexao.php");
$stmt = $pdo->prepare("select * from tbFuncionario");
$stmt->execute();

$html = "
    <center><h1>Dados Funcionários</h1>
    <br><br>
    <table>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Salário</th>
    </tr>
";

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
    $html .= '
      <tr>
        <td> ' . $row["idFuncionario"] . ' </td>
        <td> ' . $row["nomeFuncionario"] . ' </td>
        <td> ' . $row["idadeFuncionario"] . ' </td>
        <td> ' . $row["emailFuncionario"] . ' </td>
        <td> ' . $row["cpfFuncionario"] . ' </td>
        <td> ' . $row["enderecoFuncionario"] . ' </td>
        <td> ' . $row["salarioFuncionario"] . ' </td>
      <br>
      </tr>
        ';
}
$html .= '</table></center>';


$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream(
    "Dados dos Funcionarios.pdf",
    array(
        "Attachment" => false
    )
);
