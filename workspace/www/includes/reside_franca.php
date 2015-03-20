<?php
$franca = "SELECT * FROM Respostas WHERE cidade = 'franca'";
$franca = $conn->query($franca);

$outros = "SELECT * FROM Respostas WHERE cidade = 'outros'";
$outros = $conn->query($outros);
?>