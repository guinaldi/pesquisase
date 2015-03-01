<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
   
    <title> Cadastro de Usuario </title>
  <head>  
  <?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(E_ALL & ~E_STRICT);
date_default_timezone_set('America/Sao_Paulo');
require_once('Mail.php');

//Verify post data
if ($_POST['RA'] == "" || $_POST['RA'] == null) {
    echo "<script language='javascript' type='text/javascript'>alert('O campo RA deve ser preenchido!');window.location.href='cadastro.html';</script>";
    die();
}
if ($_POST['EMAIL'] == "" || $_POST['EMAIL'] == null) {
    echo "<script language='javascript' type='text/javascript'>alert('O campo e-Mail deve ser preenchido!');window.location.href='cadastro.html';</script>";
    die();
}

//Set post values in var's;
$RA    = $_POST['RA'];
$EMAIL = $_POST['EMAIL'];

//Info to connect in database;
$servername = "localhost";
$username   = "root";
$password   = "cloudFatec";
$dbname     = "pesquisa";

// Create connection with database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Ops, aconteceu algum problema!\\n Se tiver como, mostre esses detalhes do erro para os nerd's <3: " . $conn->connect_error);
}

//Verify if RA and EMAIL exists
$sql    = "SELECT RA FROM RA WHERE RA = '$RA' AND EMAIL  = '$EMAIL' ";
$result = $conn->query($sql);

//If exist, generate password an send to student email! else, escape!
if ($result->num_rows > 0) {
    //Generate password
    $SENHA = MD5($RA . $EMAIL);
    
    //Update password in database
    $sql = "UPDATE RA SET SENHA='$SENHA' WHERE RA='$RA'";
    
    //If updated
    if ($conn->query($sql) === TRUE) {
        //Send welcome email with password
        $data_envio = date('d/m/Y');
        $hora_envio = date('H:i:s');
        
        // Destiny, subject and body
        $to      = $EMAIL;
        $from    = "adsfatec2014.2@gmail.com";
        $subject = "ADS 2015 - Solicitação de Senha";
        $body    = "
                    <html lang='pt-br'>
                       <head>
                          <meta charset='utf-8'>
                          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                          <meta name='viewport' content='width=device-width, initial-scale=1'>
                          <style type='text/css'>
                           body {
                           margin:0px;
                           font-family: 'Segoe UI', Frutiger, 'Frutiger Linotype', 'Dejavu Sans', 'Helvetica Neue', Arial, sans-serif;
                           font-size:18px;
                           color: black;
                           }
                           a{
                           color: #666666;
                           text-decoration: none;
                           }
                           a:hover {
                           color: #FF0000;
                           text-decoration: none;
                           }
                           table.center {
                           margin-left:auto; 
                           margin-right:auto;
                           }
                        </style>
                       </head>
                       <div>
                          Olá.
					             </div>
                       <br />
                       <div>
                          Conforme você solicitou, segue usuário e senha para responder o formulário sócio-econômico do ADS =)
                       </div>
                       <div>
                         <table width='100%'border='0' cellpadding='1' cellspacing='5' bgcolor='#CCCCCC' class=''>
                          <tr>
                           <td>
                          <tr>
                           <td width='720'>E-mail: <b>$EMAIL</b></td>
                          </tr>
                          <tr>
                           <td width='720'>RA: <b>$RA</b></td>
                          </tr>
                          <tr>
                           <td width='720'>Senha: <b>$SENHA</b></td>
                          </tr>
                          </td>
                          </tr> 
                         </table>
                      </div>
                      <br />
                      <br />
                      <br />
                      <div style='margin-top:10px;font-family: 'Segoe UI', Frutiger, 'Frutiger Linotype', 'Dejavu Sans', 'Helvetica Neue', Arial, sans-serif;font-size:24px;'>
                       <span style='color:red'>Não responda este e-mail, ele foi enviado automaticamente em:</span> $data_envio às: $hora_envio
                      </div>
                    </html>";
        
        // Info sender email.
        $host     = "ssl://smtp.gmail.com";
        $username = "adsfatec2014.2@gmail.com";
        $password = "123fatecfranca";
        
        //Type email
        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject,
            'MIME-Version' => "1.0",
            'Content-type' => "text/html; charset=iso-8859-1\r\n\r\n"
        );
        
        //Info smtp server
        $smtp = Mail::factory('smtp', array(
            'host' => $host,
            'port' => 465, 
            'auth' => true,
            'debug' => false, 
            'username' => $username,
            'password' => $password
        ));
        
        // Send
        $mail = $smtp->send($to, $headers, $body);
        
        // Verify error
        if (PEAR::isError($mail)) {
      //    echo $mail->getMessage();
          echo "<script language='javascript' type='text/javascript'>alert('Ops, aconteceu um problema ao enviar a senha para seu email!');window.location.href='cadastro.html';</script>";
               die();
        } else {
            echo "<script language='javascript' type='text/javascript'>alert('Beleza!\\nGeramos e enviamos uma senha para seu e-mail!\\n\\n Vai lá e verifique que estamos te encaminhado para a pagina de login\\n\\n=*');window.location.href='login.html';</script>";
            die();
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Ops, aconteceu algum problema!\\n\\n" . $conn->error . ");window.location.href='login.html';</script>";
        die();
    }
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Ops!\\nSeus dados estão incorretos ou não te encontramos aqui.\\n =/\\n\\nVerifique seu RA e E-Mail e tente novamente!');window.location.href='cadastro.html';</script>";
    die();
}

//Close database connection
$conn->close();
?>