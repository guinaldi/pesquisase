<?php

class conexao {
  public function con() {
  //Connect to database;
    $servername = "localhost";
    $username   = "root";
    $password   = "cloudFatec";
    $dbname     = "pesquisa";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) 
    {
        die("Conexão com o banco de dados falhou: " . $conn->connect_error);
    }
}
}
