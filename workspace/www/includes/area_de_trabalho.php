<?php
$na_Area = "SELECT * FROM Respostas WHERE areatrabalho = 'Na área do curso que escolhi'";
$na_Area = $conn->query($na_Area);

$fora_Area = "SELECT * FROM Respostas WHERE areatrabalho = 'Fora da área do curso que escolhi'";
$fora_Area = $conn->query($fora_Area);

$desempregado = "SELECT * FROM Respostas WHERE areatrabalho = 'Estou desempregado/a'";
$desempregado = $conn->query($desempregado);

$nunca_trabalhou = "SELECT * FROM Respostas WHERE areatrabalho = 'Nunca trabalhei'";
$nunca_trabalhou = $conn->query($nunca_trabalhou);

?>