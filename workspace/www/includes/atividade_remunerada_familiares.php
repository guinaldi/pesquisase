<?php
$um = "SELECT * FROM Respostas WHERE quemdomi = '1'";
$um = $conn->query($um);

$dois = "SELECT * FROM Respostas WHERE quemdomi = '2'";
$dois = $conn->query($dois);

$tres = "SELECT * FROM Respostas WHERE quemdomi = '3'";
$tres = $conn->query($tres);

$quatro_ou_mais = "SELECT * FROM Respostas WHERE quemdomi = '4 ou mais'";
$quatro_ou_mais = $conn->query($quatro_ou_mais);
?>