<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco_teste_login";
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die('Não foi possivel conectar');
?>