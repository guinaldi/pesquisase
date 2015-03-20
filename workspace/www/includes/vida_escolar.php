<?php
$int_publica = "SELECT * FROM Respostas WHERE classestudo = 'Integral em escola pública'";
$int_publica = $conn->query($int_publica);

$int_part = "SELECT * FROM Respostas WHERE classestudo = 'Integralmente em escola particular'";
$int_part = $conn->query($int_part);

$ambos = "SELECT * FROM Respostas WHERE classestudo = 'Ambos'";
$ambos = $conn->query($ambos);

$maior_publica = "SELECT * FROM Respostas WHERE classestudo = 'Maior parte em escola pública'";
$maior_publica = $conn->query($maior_publica);

$maior_part = "SELECT * FROM Respostas WHERE classestudo = 'Maior parte em escola particular'";
$maior_part = $conn->query($maior_part);
?>