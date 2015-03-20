<?php
$nenhum = "SELECT * FROM Respostas WHERE idioma = 'Nenhum'";
$nenhum = $conn->query($nenhum);

$ingles = "SELECT * FROM Respostas WHERE idioma = 'Inglês'";
$ingles = $conn->query($ingles);

$espanhol = "SELECT * FROM Respostas WHERE idioma = 'Espanhol'";
$espanhol = $conn->query($espanhol);

$ambos_idioma = "SELECT * FROM Respostas WHERE idioma = 'Ambos'";
$ambos_idioma = $conn->query($ambos_idioma);

$outros = "SELECT * FROM Respostas WHERE idioma = 'Outros'";
$outros = $conn->query($outros);

?>