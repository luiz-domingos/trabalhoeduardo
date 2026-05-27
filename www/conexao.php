<?php

$conexao_bd = mysqli_connect(
    "localhost",
    "root",
    "",
    "labdbprog2"
);

if (!$conexao_bd) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>