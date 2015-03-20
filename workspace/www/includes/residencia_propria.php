<?php
$residencia_propria_sim = "SELECT * FROM Respostas WHERE sitdomi = 'Próprio' or sitdomi = 'Financiado'";
$residencia_propria_sim = $conn->query($residencia_propria_sim);

$residencia_propria_nao = "SELECT * FROM Respostas WHERE sitdomi = 'Alugado' or sitdomi = 'Cedido'";
$residencia_propria_nao = $conn->query($residencia_propria_nao);
?>