<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>  </title>
  <head>  
<?php  
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
          echo ($radio_curso);
          echo ($textinput_datadematricula);
          echo ($radio_periodo);
          echo ($radio_municipioresidencia);
          echo ($checkBox_telefone_0);
          echo ($checkBox_telefone_1);
          echo ($checkBox_telefone_2);
          echo ($radio_operadoras);
          echo ($textinput_datadenascimento);
          echo ($radio_estadocivil);
          echo ($radio_filhos);
          echo ($textinput_qtdefilhos);
          echo ($radio_deficiencia);
          echo ($radio_locomocao);
          echo ($radio_domicilio);
          echo ($textinput_domicilio);
          echo ($radio_moradores);
          echo ($radio_Nfamiliares);
          echo ($radio_atvRemunerada);
          echo ($radio_SomaRenda);
          echo ($radio_areaTrabalho);
          echo ($radio_periodoTrabalho);
          echo ($txt_horastrabalhadas);
          echo ($radio_trocardehorario);
          echo ($radio_vidaescolar);
          echo ($txt_cursouensinomedio);
          echo ($radio_conhecimentoinformatica);
          echo ($radio_conhecimentosim);
          echo ($checkBox_computadoresemcasa_0);
          echo ($checkBox_computadoresemcasa_1);
          echo ($radio_internet);
          echo ($radio_IDIOMAS);
          echo ($radio_cursosuperior);
          echo ($textinput_curso1);
          echo ($radio_cursandocurso);
          echo ($textinput_fazendocurso);
          echo ($radios_enem);
          echo ($textinput_notaenem);
          echo ($textarea_motivo);
  }
  else{
    
  }  
?>