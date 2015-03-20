<?php
$solteiro = "SELECT * FROM Respostas WHERE civil = 'Solteiro'";
$solteiro = $conn->query($solteiro);

$casado = "SELECT * FROM Respostas WHERE civil = 'Casado'";
$casado = $conn->query($casado);

$outros = "SELECT * FROM Respostas WHERE civil = 'Outros'";
$outros = $conn->query($outros);

?>