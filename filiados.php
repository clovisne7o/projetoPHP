<?php

$conn = new PDO("mysql:dbname=entrega;host=localhost", "root", "");

$dados = $conn->PREPARE("SELECT * FROM filiado;");

$dados->execute();

$resultado = $dados->fetchAll();

var_dump($resultado);

?>