<?php
$familia = "SELECT * FROM Respostas WHERE qntfamilia = 'Familia'";
$familia = $conn->query($familia);

$parentes = "SELECT * FROM Respostas WHERE qntfamilia = 'Parentes'";
$parentes = $conn->query($parentes);

$conjuge = "SELECT * FROM Respostas WHERE qntfamilia = 'Cônjuge'";
$conjuge = $conn->query($conjuge);
?>