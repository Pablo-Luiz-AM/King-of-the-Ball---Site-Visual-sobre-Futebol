<?php 
session_start();
include("cadastro_conf.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nome = mysqli_real_escape_string($conn, $_POST['nome']);
 $senha = mysqli_real_escape_string($conn, $_POST['senha']);
 $idade = mysqli_real_escape_string($conn, $_POST['idade']);
 $local_1 = mysqli_real_escape_string($conn, $_POST['local_1']);
 $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
 $gmail = mysqli_real_escape_string($conn, $_POST['gmail']);



$sql = "INSERT INTO cadastro_fut (nome,senha,idade,local_1,telefone,gmail) VALUES ('$nome','$senha','$idade','$local_1','$telefone','$gmail')";
if(mysqli_query($conn, $sql)) {
    $_SESSION['status_cadastro_fut'] = true;
    header('location: cadastro.html');
    exit;
}
mysqli_close($conn);
}
?>