
<?php
session_start();
include('testarconexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha']))  {
	header("Location: index.php");
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT ID, USUARIO FROM USUARIOS WHERE USUARIO = '{$usuario}' AND SENHA = '{$senha}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: tela-teste-sucesso.php');
	exit();
}else{
	$_SESSION['no_autentic'] = true;
	header('Location: tela-teste-erro.php');
	
	exit();
}


?>