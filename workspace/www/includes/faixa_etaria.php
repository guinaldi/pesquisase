<?php
$ate_20 = "SELECT * from `Respostas` where (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) <= 20";
$ate_20 = $conn->query($ate_20);

$de21_a30 = "SELECT * from `Respostas` where (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) >= 21 and (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) <= 30";
$de21_a30 = $conn->query($de21_a30);

$de31_a40 = "SELECT * from `Respostas` where (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) >= 31 and (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) <= 40";
$de31_a40 = $conn->query($de31_a40);

$maior_40 = "SELECT * from `Respostas` where (YEAR(CURDATE()) - RIGHT(`nascimento`, 4)) - (DATE_FORMAT(CURDATE(), '%e/%m')<LEFT(`nascimento`, 5)) >= 40";
$maior_40 = $conn->query($maior_40);
?>