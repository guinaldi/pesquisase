<?php
$sim = "SELECT * FROM Respostas WHERE info = 'Sim'";
$sim = $conn->query($sim);

$nao = "SELECT * FROM Respostas WHERE info = 'Não'";
$nao = $conn->query($nao);
?>