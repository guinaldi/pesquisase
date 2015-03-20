<?php
$veiculo_proprio = "SELECT * FROM Respostas WHERE conducao = 'Veículo próprio'";
$veiculo_proprio = $conn->query($veiculo_proprio);

$coletivo = "SELECT * FROM Respostas WHERE conducao = 'Transporte coletivo'";
$coletivo = $conn->query($coletivo);

$sem_conducao = "SELECT * FROM Respostas WHERE conducao = 'Sem Condução'";
$sem_conducao = $conn->query($sem_conducao);

$veiculos_terceiros = "SELECT * FROM Respostas WHERE conducao = 'Veículo terceiros'";
$veiculos_terceiros = $conn->query($veiculos_terceiros);
?>