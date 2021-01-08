<?php
  $host = 'localhost';// servidor weblocalhost, pode escrever ao inves do ip o numero do ip
  $usuario = 'root';//usuario do root
  $senha = '';//senha
  $bd = 'curso_php';//nome do banco de dados

  $mysqli = new mysqli( $host, $usuario, $senha, $bd );//funcao para pegar os parametros

  if ($mysqli->connect_errno)
    echo "Problemas para conectar no Banco de dados:(".$mysqli->connect_errno.")".$mysqli->connect_error;



 ?>
