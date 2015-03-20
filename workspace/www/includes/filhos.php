<?php
$filhos_sim = "SELECT * FROM Respostas WHERE filhos = 'Sim'";
$filhos_sim = $conn->query($filhos_sim);

$filhos_nao = "SELECT * FROM Respostas WHERE filhos = 'Não'";
$filhos_nao = $conn->query($filhos_nao);
?>