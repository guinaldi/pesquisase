<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/topo.css" rel="stylesheet"/>
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js" type="text/javascript"></script>
    <title> Resposta </title>
  <head>  
  <body>   
    <div class="container" style="margin-top:10%;">  
      <div style="width:100%" >
    
<?php  
  session_start();
  if ($_SESSION['ra'] == "" || $_SESSION['ra'] == null) {
      echo "<script language='javascript' type='text/javascript'>alert('Você não deveria estar aqui! \\n Tchau!');window.location.href='login.html';</script>";
      die();
  }
  $RA  = $_SESSION['ra'];
  date_default_timezone_set ("America/Sao_Paulo");
  if(isset($_POST['enviar'])){
          if(isset($_POST['radio_curso'])){ $radio_curso =  $_POST['radio_curso'];}else{$radio_curso ='';}
          if(isset($_POST['textinput_datadematricula'])){$textinput_datadematricula = date('d/m/Y', strtotime( $_POST['textinput_datadematricula']));}else {$textinput_datadematricula ='';}
          if(isset($_POST['radio_periodo'])){ $radio_periodo =  $_POST['radio_periodo'];}else {$radio_periodo ='';}
          if(isset($_POST['radio_municipioresidencia'])){ $radio_municipioresidencia =  $_POST['radio_municipioresidencia'];}else {$radio_municipioresidencia ='';}
          if(isset($_POST['checkBox_telefone-0'])){ $checkBox_telefone_0 =  $_POST['checkBox_telefone-0'];}else {$checkBox_telefone_0 ='';}
          if(isset($_POST['checkBox_telefone-1'])){ $checkBox_telefone_1 =  $_POST['checkBox_telefone-1'];}else {$checkBox_telefone_1 ='';}
          if(isset($_POST['checkBox_telefone-2'])){ $checkBox_telefone_2 =  $_POST['checkBox_telefone-2'];}else {$checkBox_telefone_2 ='';}
          if(isset($_POST['radio_operadoras'])){ $radio_operadoras =  $_POST['radio_operadoras'];}else {$radio_operadoras ='';}
          if(isset($_POST['textinput_datadenascimento'])){ $textinput_datadenascimento = date('d/m/Y', strtotime($_POST['textinput_datadenascimento']));}else {$textinput_datadenascimento ='';}
          if(isset($_POST['radio_estadocivil'])){ $radio_estadocivil =  $_POST['radio_estadocivil'];}else {$radio_estadocivil ='';}
          if(isset($_POST['radio_filhos'])){ $radio_filhos =  $_POST['radio_filhos'];}else {$radio_filhos ='';}
          if(isset($_POST['textinput_qtdefilhos'])){ $textinput_qtdefilhos =  $_POST['textinput_qtdefilhos'];}else {$textinput_qtdefilhos ='';}
          if(isset($_POST['radio_deficiencia'])){ $radio_deficiencia =  $_POST['radio_deficiencia'];}else {$radio_deficiencia ='';}
          if(isset($_POST['radio_locomocao'])){ $radio_locomocao =  $_POST['radio_locomocao'];}else {$radio_locomocao ='';}
          if(isset($_POST['radio_domicilio'])){ $radio_domicilio =  $_POST['radio_domicilio'];}else {$radio_domicilio ='';}
          if(isset($_POST['textinput_domicilio'])){ $textinput_domicilio =  $_POST['textinput_domicilio'];}else {$textinput_domicilio ='';}
          if(isset($_POST['radio_moradores'])){ $radio_moradores =  $_POST['radio_moradores'];}else {$radio_moradores ='';}
          if(isset($_POST['radio_Nfamiliares'])){ $radio_Nfamiliares =  $_POST['radio_Nfamiliares'];}else {$radio_Nfamiliares ='';}
          if(isset($_POST['radio_atvRemunerada'])){ $radio_atvRemunerada =  $_POST['radio_atvRemunerada'];}else {$radio_atvRemunerada ='';}
          if(isset($_POST['radio_SomaRenda'])){ $radio_SomaRenda =  $_POST['radio_SomaRenda'];}else {$radio_SomaRenda ='';}
          if(isset($_POST['radio_areaTrabalho'])){ $radio_areaTrabalho =  $_POST['radio_areaTrabalho'];}else {$radio_areaTrabalho ='';}
          if(isset($_POST['radio_periodoTrabalho'])){ $radio_periodoTrabalho =  $_POST['radio_periodoTrabalho'];}else {$radio_periodoTrabalho ='';}
          if(isset($_POST['txt_horastrabalhadas'])){ $txt_horastrabalhadas =  $_POST['txt_horastrabalhadas'];}else {$txt_horastrabalhadas ='';}
          if(isset($_POST['radio_trocardehorario'])){ $radio_trocardehorario =  $_POST['radio_trocardehorario'];}else {$radio_trocardehorario ='';}
          if(isset($_POST['radio_vidaescolar'])){ $radio_vidaescolar =  $_POST['radio_vidaescolar'];}else {$radio_vidaescolar ='';}
          if(isset($_POST['txt_cursouensinomedio'])){ $txt_cursouensinomedio =  $_POST['txt_cursouensinomedio'];}else {$txt_cursouensinomedio ='';}
          if(isset($_POST['radio_conhecimentoinformatica'])){ $radio_conhecimentoinformatica =  $_POST['radio_conhecimentoinformatica'];}else {$radio_conhecimentoinformatica ='';}
          if(isset($_POST['radio_conhecimentosim'])){ $radio_conhecimentosim =  $_POST['radio_conhecimentosim'];}else {$radio_conhecimentosim ='';}
          if(isset($_POST['checkBox_computadoresemcasa-0'])){$checkBox_computadoresemcasa_0 =  $_POST['checkBox_computadoresemcasa-0'];}else {$checkBox_computadoresemcasa_0 ='';}
          if(isset($_POST['checkBox_computadoresemcasa-1'])){$checkBox_computadoresemcasa_1 =  $_POST['checkBox_computadoresemcasa-1'];}else {$checkBox_computadoresemcasa_1 ='';}
          if(isset($_POST['radio_internet'])){ $radio_internet =  $_POST['radio_internet'];}else {$radio_internet ='';}
          if(isset($_POST['radio_IDIOMAS'])){ $radio_IDIOMAS =  $_POST['radio_IDIOMAS'];}else {$radio_IDIOMAS ='';}
          if(isset($_POST['radio_cursosuperior'])){ $radio_cursosuperior =  $_POST['radio_cursosuperior'];}else {$radio_cursosuperior ='';}
          if(isset($_POST['textinput_curso1'])){ $textinput_curso1 =  $_POST['textinput_curso1'];}else {$textinput_curso1 ='';}
          if(isset($_POST['radio_cursandocurso'])){ $radio_cursandocurso =  $_POST['radio_cursandocurso'];}else {$radio_cursandocurso ='';}
          if(isset($_POST['textinput_fazendocurso'])){ $textinput_fazendocurso =  $_POST['textinput_fazendocurso'];}else {$textinput_fazendocurso ='';}
          if(isset($_POST['radios_enem'])){ $radios_enem =  $_POST['radios_enem'];}else {$radios_enem ='';}
          if(isset($_POST['textinput_notaenem'])){ $textinput_notaenem =  $_POST['textinput_notaenem'];}else {$textinput_notaenem ='';}
          if(isset($_POST['textarea_motivo'])){ $textarea_motivo =  $_POST['textarea_motivo'];}else {$textarea_motivo ='';}
              
         if ($checkBox_telefone_0 <> "" and $checkBox_telefone_1 <>"")
          {
               $checkBox_telefone = $checkBox_telefone_0 .'/'.$checkBox_telefone_1;
               $celular = 1;
               $fixo = 1;
          }
          else 
          {
              if ($checkBox_telefone_0 <> "" )
              {
                 $checkBox_telefone = $checkBox_telefone_0;
                 $celular = 0;
                 $fixo = 1;
                 $radio_operadoras = "";
              }
              else
              {
                 if ($checkBox_telefone_1 <> "")
                 {
                    $checkBox_telefone = $checkBox_telefone_1;
                    $celular = 1;
                    $fixo = 0;
                 }
                else
                {
                  $checkBox_telefone = $checkBox_telefone_2;              
                  $celular = 0;
                  $fixo = 1;
                  $radio_operadoras = "";
                }
              }
            
          }
    
          if ($checkBox_computadoresemcasa_0 <> "" and $checkBox_computadoresemcasa_1 <>"")
          {
             $checkBox_computadoresemcasa = $checkBox_computadoresemcasa_0 . '/' . $checkBox_computadoresemcasa_1;
          }
          else 
          {
            if ($checkBox_computadoresemcasa_0 <> "" )
            {
                $checkBox_computadoresemcasa = $checkBox_computadoresemcasa_0;
            } 
            else 
            {
               if ($checkBox_computadoresemcasa_1 <> "" )
               {
                 $checkBox_computadoresemcasa = $checkBox_computadoresemcasa_1;
               }
            }
          }
   
          if ($radio_areaTrabalho == "Estou desempregado/a" or $radio_areaTrabalho == "Nunca trabalhei" )
          {
            $radio_periodoTrabalho = "";
            $txt_horastrabalhadas = "";
            $radio_trocardehorario ="";
          }
    
          if ($radio_conhecimentoinformatica == "Não" )
          {
              $radio_conhecimentosim = "";
          }
    
          if ($radio_cursosuperior == "Não" )
          {
            $textinput_curso1 = "";
          }
    
          if ($radio_cursandocurso == "Não" )
          {
            $textinput_fazendocurso = "";
          }
    
          if ($radios_enem == "Não" )
          {
            $textinput_notaenem = "";
          }
    
         /* echo ('radio_curso:<b style="color:red;"> ' . $radio_curso . '</b><br />');
          echo ('textinput_datadematricula:<b style="color:red;"> ' . $textinput_datadematricula . '</b><br />');
          echo ('radio_periodo:<b style="color:red;"> ' . $radio_periodo . '</b><br />');
          echo ('radio_municipioresidencia:<b style="color:red;"> ' . $radio_municipioresidencia . '</b><br />');
          echo ('checkBox_telefone:<b style="color:red;"> ' . $checkBox_telefone . '</b><br />');
          //echo ($checkBox_telefone_1 . '</b><br />');
          //echo ($checkBox_telefone_2 . '</b><br />');
          echo ('radio_operadoras:<b style="color:red;"> ' . $radio_operadoras . '</b><br />');
          echo ('textinput_datadenascimento:<b style="color:red;"> ' . $textinput_datadenascimento . '</b><br />');
          echo ('radio_estadocivil:<b style="color:red;"> ' . $radio_estadocivil . '</b><br />');
          echo ('radio_filhos:<b style="color:red;"> ' . $radio_filhos . '</b><br />');
          echo ('textinput_qtdefilhos:<b style="color:red;"> ' . $textinput_qtdefilhos . '</b><br />');
          echo ('radio_deficiencia:<b style="color:red;"> ' . $radio_deficiencia . '</b><br />');
          echo ('radio_locomocao:<b style="color:red;"> ' . $radio_locomocao . '</b><br />');
          echo ('radio_domicilio:<b style="color:red;"> ' . $radio_domicilio . '</b><br />');
          echo ('textinput_domicilio:<b style="color:red;"> ' . $textinput_domicilio . '</b><br />');
          echo ('radio_moradores:<b style="color:red;"> ' . $radio_moradores . '</b><br />');
          echo ('radio_Nfamiliares:<b style="color:red;"> ' . $radio_Nfamiliares . '</b><br />');
          echo ('radio_atvRemunerada:<b style="color:red;"> ' . $radio_atvRemunerada . '</b><br />');
          echo ('radio_SomaRenda:<b style="color:red;"> ' . $radio_SomaRenda . '</b><br />');
          echo ('radio_areaTrabalho:<b style="color:red;"> ' . $radio_areaTrabalho . '</b><br />');
          echo ('radio_periodoTrabalho:<b style="color:red;"> ' . $radio_periodoTrabalho . '</b><br />');
          echo ('txt_horastrabalhadas:<b style="color:red;"> ' . $txt_horastrabalhadas . '</b><br />');
          echo ('radio_trocardehorario:<b style="color:red;"> ' . $radio_trocardehorario . '</b><br />');
          echo ('radio_vidaescolar:<b style="color:red;"> ' . $radio_vidaescolar . '</b><br />');
          echo ('txt_cursouensinomedio:<b style="color:red;"> ' . $txt_cursouensinomedio . '</b><br />');
          echo ('radio_conhecimentoinformatica:<b style="color:red;"> ' . $radio_conhecimentoinformatica . '</b><br />');
          echo ('radio_conhecimentosim:<b style="color:red;"> ' . $radio_conhecimentosim . '</b><br />');
          echo ('checkBox_computadoresemcasa:<b style="color:red;"> ' . $checkBox_computadoresemcasa . '</b><br />');
          //echo ($checkBox_computadoresemcasa_1 . '</b><br />');
          echo ('radio_internet:<b style="color:red;"> ' . $radio_internet . '</b><br />');
          echo ('radio_IDIOMAS:<b style="color:red;"> ' . $radio_IDIOMAS . '</b><br />');
          echo ('radio_cursosuperior:<b style="color:red;"> ' . $radio_cursosuperior . '</b><br />');
          echo ('textinput_curso1:<b style="color:red;"> ' . $textinput_curso1 . '</b><br />');
          echo ('radio_cursandocurso:<b style="color:red;"> ' . $radio_cursandocurso . '</b><br />');
          echo ('textinput_fazendocurso:<b style="color:red;"> ' .$textinput_fazendocurso . '</b><br />');
          echo ('radios_enem:<b style="color:red;"> ' .$radios_enem . '</b><br />');
          echo ('textinput_notaenem:<b style="color:red;"> ' .$textinput_notaenem . '</b><br />');
          echo ('textarea_motivo:<b style="color:red;"> ' .$textarea_motivo . '</b><br />');*/     
    
          $servername = "localhost";
          $username = "root";
          $password = "cloudFatec";
          $dbname = "pesquisa";
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          if (!$conn) {
            die("<script language='javascript' type='text/javascript'>alert('Ops, falha ao conectar no banco de dados, tente novamente.');window.location.href='cadastro.html';</script>");
          }
    
    
    $RA = str_replace("'" '"', $RA);
$radio_curso =  str_replace("'" '"', $radio_curso);
$textinput_datadematricula =  str_replace("'" '"', $textinput_datadematricula);
$radio_periodo =  str_replace("'" '"', $radio_periodo);
$radio_municipioresidencia =  str_replace("'" '"', $radio_municipioresidencia);
$checkBox_telefone =  str_replace("'" '"', $checkBox_telefone);
/$radio_operadoras =  str_replace("'" '"', /$radio_operadoras);
$textinput_datadenascimento =  str_replace("'" '"', $textinput_datadenascimento);
$radio_estadocivil =  str_replace("'" '"', $radio_estadocivil);
$radio_filhos =  str_replace("'" '"', $radio_filhos);
$textinput_qtdefilhos =  str_replace("'" '"', $textinput_qtdefilhos);
$radio_deficiencia =  str_replace("'" '"', $radio_deficiencia);
$radio_locomocao =  str_replace("'" '"', $radio_locomocao);
$radio_domicilio =  str_replace("'" '"', $radio_domicilio);
$textinput_domicilio =  str_replace("'" '"', $textinput_domicilio);
$radio_atvRemunerada =  str_replace("'" '"', $radio_atvRemunerada);
$radio_moradores =  str_replace("'" '"', $radio_moradores);
$radio_Nfamiliares =  str_replace("'" '"', $radio_Nfamiliares);
$radio_SomaRenda =  str_replace("'" '"', $radio_SomaRenda);
$radio_areaTrabalho =  str_replace("'" '"', $radio_areaTrabalho);
$radio_periodoTrabalho =  str_replace("'" '"', $radio_periodoTrabalho);
$txt_horastrabalhadas =  str_replace("'" '"', $txt_horastrabalhadas);
$radio_trocardehorario =  str_replace("'" '"', $radio_trocardehorario);
$radio_vidaescolar =  str_replace("'" '"', $radio_vidaescolar);
$txt_cursouensinomedio =  str_replace("'" '"', $txt_cursouensinomedio);
$radio_conhecimentoinformatica =  str_replace("'" '"', $radio_conhecimentoinformatica);
$radio_conhecimentosim =  str_replace("'" '"', $radio_conhecimentosim);
$checkBox_computadoresemcasa =  str_replace("'" '"', $checkBox_computadoresemcasa);
$radio_internet =  str_replace("'" '"', $radio_internet);
$radio_IDIOMAS =  str_replace("'" '"', $radio_IDIOMAS);
$radio_cursosuperior =  str_replace("'" '"', $radio_cursosuperior);
$textinput_curso1 =  str_replace("'" '"', $textinput_curso1);
$radio_cursandocurso =  str_replace("'" '"', $radio_cursandocurso);
$textinput_fazendocurso =  str_replace("'" '"', $textinput_fazendocurso);
$radios_enem =  str_replace("'" '"', $radios_enem);
$textinput_notaenem =  str_replace("'" '"', $textinput_notaenem);
$textarea_motivo =  str_replace("'" '"', $textarea_motivo);
$fixo =  str_replace("'" '"', $fixo);
$celular =  str_replace("'" '"', $celular);
    
          $sql =  "INSERT INTO `Respostas`(`RA`, `curso`, `datam`, `periodo`, `cidade`, `tel`, `qntcel`, `nascimento`, `civil`, `filhos`, `qntfilhos`, `deficiencia`, `conducao`, `sitdomi`, `tempodomi`, `quemdomi`, `qntfamilia`, `qntfamiliat`, `rendafamilia`, `areatrabalho`, `periodotrabalho`, `horastrabalho`, `trocatrabalho`, `classestudo`, `ondeestudo`, `info`, `nivelinfo`, `computador`, `internet`, `idioma`, `jasuperior`, `qualsuperior`, `estasuperior`, `estaqualsuperior`, `enem`, `notaenem`, `vestibular`, `fixo`, `cel`)
     VALUES 
    ('".$RA."','" .$radio_curso. "','" .$textinput_datadematricula. "','" .$radio_periodo. "','" .$radio_municipioresidencia. "','" . $checkBox_telefone . "','" .$radio_operadoras. "','" .$textinput_datadenascimento. "','" .$radio_estadocivil. "','" .$radio_filhos. "','" .$textinput_qtdefilhos. "','" .$radio_deficiencia. "','" .$radio_locomocao. "','" .$radio_domicilio. "','" .$textinput_domicilio. "','" . $radio_atvRemunerada. "','" .$radio_moradores. "','" .$radio_Nfamiliares. "','" .$radio_SomaRenda. "','" .$radio_areaTrabalho. "','" .$radio_periodoTrabalho. "','" .$txt_horastrabalhadas. "','" .$radio_trocardehorario. "','" .$radio_vidaescolar. "','" .$txt_cursouensinomedio. "','" .$radio_conhecimentoinformatica. "','" .$radio_conhecimentosim. "','" .$checkBox_computadoresemcasa. "','" .$radio_internet. "','" .$radio_IDIOMAS. "','" .$radio_cursosuperior. "','" .$textinput_curso1. "','" .$radio_cursandocurso. "','" .$textinput_fazendocurso. "','" .$radios_enem. "','" .$textinput_notaenem. "','" .$textarea_motivo. "','" .$fixo. "','" .$celular. "')";

          if (mysqli_query($conn, $sql)) 
          {
            echo ("Tudo certo! <br/> <br/> Obrigado por responder o questionário.<br/>  Assim que todos responderem, vamos liberar a planilha em excel aqui mesmo para fazermos os gráficos.<br/> <br/> Obrigado!");
          }
          else 
          {
            if (strpos(mysqli_error($conn), 'DUPLICATE') !== FALSE)
            {
              echo("Você já nos respondeu! <br /> Nós não atualizamos suas respostas anteriores, se deseja isso entre em contato pelo e-mail: <a href='adsfatec2014.2@gmail.com'>adsfatec2014.2@gmail.com</a>  <br /> Não esqueça de infrmar seu número de RA.<br /><br /> Obrigado!");
            }
            else
            {
              echo("Ops, Falha ao registrar sua resposta! Por favor, volte e tente novamente. <br/> Detalhes do erro: <br /> <b> " .  mysqli_error($conn) ."</b>");
            }
          }
          mysqli_close($conn);
  } 
echo "<div style='width:20%; font-size:12px; background-color:; top:0px; margin-left:400px;margin-top:-30px; float: right'> <i style='color:blue'>   <a href='index.php?p=sair' type='' class='btn btn-danger' style='float:right;margin-top:3px; margin-right: 40px; '>Sair</a>";
          if (isset($_GET['p'])) {
            session_destroy();
            echo("<script>location.href = 'login.html';</script>");
          }
          ?>
              </div>  
              </div>  
  </body>
</html>