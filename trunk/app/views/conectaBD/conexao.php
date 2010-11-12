<?php

$hostname_conexao = "localhost";
$database_conexao = "loja_virtual";
$username_conexao = "root";
$password_conexao = "";

$conexao = mysql_pconnect($hostname_conexao, $username_conexao, $password_conexao) or die(mysql_error());
mysql_select_db($database_conexao, $conexao);

?>