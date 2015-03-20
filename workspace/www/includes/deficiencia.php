<?php
$nenhuma = "SELECT * FROM Respostas WHERE deficiencia = 'Nenhuma'";
$nenhuma = $conn->query($nenhuma);

$auditiva = "SELECT * FROM Respostas WHERE deficiencia = 'Auditiva'";
$auditiva = $conn->query($auditiva);

$motora = "SELECT * FROM Respostas WHERE deficiencia = 'Motora'";
$motora = $conn->query($motora);

$visual = "SELECT * FROM Respostas WHERE deficiencia = 'Visual'";
$visual = $conn->query($visual);

$multipla = "SELECT * FROM Respostas WHERE deficiencia = 'Múltipla'";
$multipla = $conn->query($multipla);

?>