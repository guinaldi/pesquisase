<?php
    session_start();
    //Escape error ¬¬
    error_reporting(E_ALL ^ E_DEPRECATED);
    if (isset($_SESSION['ra'])){
         header("Location:index.php");
         die();
     } 

    //Verify post data;
    if ($_POST['RA'] == "" || $_POST['RA'] == null) {
        echo "<script language='javascript' type='text/javascript'>alert('O campo RA deve ser preenchido');window.location.href='login.html';</script>";
        die();
    }
    if ($_POST['SENHA'] == "" || $_POST['SENHA'] == null) {
        echo "<script language='javascript' type='text/javascript'>alert('O campo SENHA deve ser preenchido');window.location.href='login.html';</script>";
        die();
    }

    //Set post values in variables;
    $RA  = $_POST['RA'];
    $SENHA = $_POST['SENHA'];

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

    //Verify if RA user exists
    $sql    = "SELECT RA, NOME, EMAIL FROM RA WHERE RA = '$RA' AND SENHA ='$SENHA' ";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) 
    {
      while($row = $result->fetch_assoc()) {
        $_SESSION['ra'] = $row["RA"];
        $_SESSION['nome'] = $row["NOME"];       
      }
      header("Location:index.php");
    }
    else 
    {
      echo "<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorretos!');window.location.href='login.html'</script>";
      die();
    }
?>