<?php
include("conexao.php");

$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$senha = $_POST['password'];


$sql = "INSERT INTO clientes(nome, email, telefone,senha)
    VALUES ('$nome','$email','$telefone','$senha')";

if (mysqli_query($conexao, $sql)) {
   echo '<script> alert("Usuário cadastrado com sucesso"); window.location.href = "http://localhost/trabalho/home.html"</script>';
} else {
   echo "Erro" . mysqli_connect_error();
   echo '<script> alert("Não foi possivel fazer o cadastro do usuário. Tente novamente"); window.location.href = "http://localhost/trabalho/register.html"</script>';
}
mysqli_close($conexao);
?>