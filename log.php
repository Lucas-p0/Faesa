<?php
include ("conn.php");
$nome=$_GET['nomesobrenome'];
$email= $_GET['email'];
$telefone=$_GET['telefone'];
$mensagem=$_GET['mensagem'];
$query="INSERT INTO `contato` (`nome`, `email`, `telefone`, `mensagem`) VALUES ('".$nome."', '".$email."', '".$telefone."', '".$mensagem."')";
echo $query;
$result=mysqli_query($conexao,$query);

echo "<br>";
$select = "SELECT * FROM contato";
if($result = mysqli_query($conexao, $select)){
    echo "Returned rows are: ". mysqli_num_rows($result);
    mysqli_free_result($result);
}
// echo $result;
