<?php

$um = "SELECT * FROM Respostas WHERE rendafamilia = '1'";
$um = $conn->query($um);

$dois = "SELECT * FROM Respostas WHERE rendafamilia = '2'";
$dois = $conn->query($dois);

$tres = "SELECT * FROM Respostas WHERE rendafamilia = '3'";
$tres = $conn->query($tres);

$quatro = "SELECT * FROM Respostas WHERE rendafamilia = '4'";
$quatro = $conn->query($quatro);

$cinco = "SELECT * FROM Respostas WHERE rendafamilia = '5'";
$cinco = $conn->query($cinco);

$mais_cinco = "SELECT * FROM Respostas WHERE rendafamilia = 'Mais que 5'";
$mais_cinco = $conn->query($mais_cinco);

?>