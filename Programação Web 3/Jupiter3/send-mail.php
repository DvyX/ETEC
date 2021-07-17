<?php

require_once("./class.phpmailer.php");
require_once("./conexao.php");

$destEmail = $_POST['txtEmail'];

if ($destEmail == null || $destEmail == "") {
    header("location: ./email.php?mailSet=false");
}else{
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;

$mail->Username = 'jupiter.website.ofc@gmail.com';
$mail->Password = '123jupiter';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('jupiter.website.ofc@gmail.com', 'Jupiter');
$mail->SingleTo = true;

$mail->addAddress($destEmail);

$mail->Subject = "Seus dados estão aqui!";

$stmt = $pdo->prepare('select * from tbFuncionario');
$stmt->execute();
$mail->IsHTML(true);
$mail->Body = '
<html>
<body>
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
    ';

while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
   $mail->Body.=
   '<tr>'.
        '<td>'. $row["idFuncionario"] .'</td>'.
        '<td>'.$row["nomeFuncionario"] .'</td>'.
        '<td>'. $row["idadeFuncionario"] .'</td>'.
        '<td>'. $row["emailFuncionario"] .'</td>'.
        '<td>'. $row["cpfFuncionario"] .'</td>'.
        '<td>'. $row["enderecoFuncionario"] .'</td>'.
        '<td>R$'.$row["salarioFuncionario"] .'</td>'.
   '</tr>';
}
$mail->Body.='</table></center></body></html>';

if(!$mail->send()){
    $err = $mail->ErrorInfo;
    header('location: ./email.php?mailSet=false&errorInfo='.$err);
}else{
    $url = './index.php';
    echo("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
    exit();
}
}

?>