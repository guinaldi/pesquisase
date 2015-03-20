<?php
$ate_3 = "SELECT * FROM Respostas WHERE qntfamiliat = '1 a 3'";
$ate_3 = $conn->query($ate_3);

$de4_a6 = "SELECT * FROM Respostas WHERE qntfamiliat = '4 a 6'";
$de4_a6 = $conn->query($de4_a6);

$acima_6 = "SELECT * FROM Respostas WHERE qntfamiliat = 'Mais de 6'";
$acima_6 = $conn->query($acima_6);
?>