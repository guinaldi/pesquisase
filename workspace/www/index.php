<?php
session_start();
?>
<html>
  <head>
    <title>Questionário ADS 2ºsem</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/topo.css" rel="stylesheet"/>
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js" type="text/javascript"></script>
    <style type="text/css">
        .error{
          font-weight: normal; 
        }
        label.error {
            padding:6px;
            color: #b94a48;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #f2dede;
            border: 1px solid #eed3d7;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            margin-left: 3%;
            position:static;
            height: auto;
        }
      date.error {
            padding:6px;
            color: #b94a48;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #f2dede;
            border: 1px solid #eed3d7;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            margin-left:0px;
            height: auto;
            font-weight:normal;
      }
    </style>  
    <script type="text/javascript">
     
      $().ready(function () {
        
        var areatrabalho;
        var conhecimentoInfo;
        var ensinoSuperior;
        var cursandocurso;
        var enem;
        
        
       $('#checkBox_telefone-0').click(function () {
           $('#checkBox_telefone-2').attr("checked",false);
       });        
        
       $('#checkBox_telefone-1').click(function () {
           $("#operadoras").toggle(this.checked);
           $('#checkBox_telefone-2').attr("checked",false);
       });
        
       $('#checkBox_telefone-2').click(function () {
           $("#operadoras").toggle(false);
           $('#checkBox_telefone-0').attr("checked",false);
           $('#checkBox_telefone-1').attr("checked",false);
       });
       
      $('#radio_filhos-1').click(function () {
         $("#filhosqnt").toggle(this.checked);
      });
      
      $('#radio_filhos-0').click(function () {
       $("#filhosqnt").toggle(false);
      });
        
       $('#radio_areaTrabalho-0').click(function () {
           $("#periodot").toggle(this.checked);
           $("#horast").toggle(this.checked);
           $("#trocahorario").toggle(this.checked);
           areatrabalho =true;
       });
        
       $('#radio_areaTrabalho-1').click(function () {
           $("#periodot").toggle(this.checked);
           $("#horast").toggle(this.checked);
           $("#trocahorario").toggle(this.checked);
           areatrabalho =true;
       });
       
      $('#radio_areaTrabalho-2').click(function () {
         $("#periodot").toggle(false);
         $("#horast").toggle(false);
         $("#trocahorario").toggle(false);
         areatrabalho = false;
      });
      
      $('#radio_areaTrabalho-3').click(function () {
         $("#periodot").toggle(false);
         $("#horast").toggle(false);
         $("#trocahorario").toggle(false);
         areatrabalho = false;
      });
        
      $('#radio_conhecimentoinformatica-0').click(function () {
       $("#nivelinfo").toggle(this.checked);
        conhecimentoInfo= true;
      });
      
      $('#radio_conhecimentoinformatica-1').click(function () {
       $("#nivelinfo").toggle(false);
        conhecimentoInfo= false;
      });

      $('#radio_cursosuperior-0').click(function () {
       $("#jafez").toggle(this.checked);
        ensinoSuperior=true;
      });
      
      $('#radio_cursosuperior-1').click(function () {
       $("#jafez").toggle(false);
        ensinoSuperior=false;
      });
        
      $('#radio_cursandocurso-0').click(function () {
       $("#cursando").toggle(this.checked);
        cursandocurso=true;
      });
      
      $('#radio_cursandocurso-1').click(function () {
       $("#cursando").toggle(false);
        cursandocurso=false;
      });
        
      $('#radios_enem-0').click(function () {
        $("#notaenem").toggle(this.checked);
        enem =true;
      });
      
      $('#radios_enem-1').click(function () {
        $("#notaenem").toggle(false);
        enem =false;
      });
       
     $("#pesquisase").validate({
        rules: {    
            radio_curso: {
              required: true
            },
            radio_periodo: {
              required: true
            },
            radio_municipioresidencia: {
              required: true
            },
            checkBox_telefone: {
              required: true
            },
            radio_operadoras: {
              required: "#checkBox_telefone-1:checked" 
            },
            radio_estadocivil: {
              required: true
            },
            radio_filhos: {
              required: true
            },
            radio_deficiencia: {
              required: true
            },
            radio_locomocao: {
              required: true
            },
            radio_domicilio: {
              required: true
            },
            radio_moradores: {
              required: true
            },
            radio_Nfamiliares: {
              required: true
            },
            radio_atvRemunerada: {
              required: true
            },
            radio_SomaRenda: {
              required: true
            },
            radio_areaTrabalho: {
              required: true
            },
            radio_periodoTrabalho: {
              required: function(element) {
                return areatrabalho;  
              }
            },
            txt_horastrabalhadas:{
              required: function(element) {
                return areatrabalho;  
              }
            },
            radio_trocardehorario: {
              required: function(element) {
                return areatrabalho;  
              }
            },
            radio_vidaescolar: {
              required: true
            },
            radio_conhecimentoinformatica: {
              required:function(element) {
                return conhecimentoInfo;  
              } 
            },
            radio_conhecimentosim: {
              required: true
            },
            checkBox_computadoresemcasa: {
              required: true
            },
            radio_internet: {
              required: true
            },
            radio_IDIOMAS: {
              required: true
            },
            radio_cursosuperior: {
              required: true
            },
            textinput_curso1:{
              required: function(element) {
                return ensinoSuperior;  
              } 
            },
            radio_cursandocurso: {
              required: true
            },  
            textinput_fazendocurso:{
              required: function(element) {
                return cursandocurso;  
              } 
            },
            radios_enem: {
              required: true
            },  
            textinput_notaenem:{
              required: function(element) {
                return enem;  
              } 
            },
            textarea_motivo: {
              required: true
            },
          },
        errorPlacement: function(error, element) {
              if ( element.parent(".form-group") ) {
                error.insertAfter( element.parent() );
                error.addClass(':error');
              }
              else { // This is the default behavior of the script for all fields
                  error.insertAfter( element );
              }
          },
        submitHandler: function(form) {
          form.submit();
          alert ("Dados enviados!");
        }
      });    
        
       /*Language: PT_BR*/
       jQuery.extend(jQuery.validator.messages, {
              required: "Este campo &eacute; requerido.",
              remote: "Por favor, corrija este campo.",
              email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
              url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
              date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
              dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
              dateDE: "Bitte geben Sie ein gültiges Datum ein.",
              number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lida.",
              numberDE: "Bitte geben Sie eine Nummer ein.",
              digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
              creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
              equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
              accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
              maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
              minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
              rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
              range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
              max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
              min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
      });
      });
    </script>
  </head>
  <body>   
    <div class="container">  
      <div style="width:100%">
        <div style='width:20%; font-size:12px; background-color:; top:0px; '> 
          <?php
          if (isset($_SESSION['ra'])) {
          echo "<br /> Bem-Vindo <b style='color:blue'>" . $_SESSION['nome'] . "</b><br /> RA: <b style='color:blue'>" . $_SESSION['ra'] . "</b><br />";
          } else {
            echo("<script>location.href = 'login.html';</script>");
          }
          ?>
          </div>
          <?php
          echo "<div style='width:20%; font-size:12px; background-color:; top:0px; margin-left:400px;margin-top:-30px; float: right'> <i style='color:blue'> " . $_SESSION['nome'] . "</i> não é você?  <a href='index.php?p=sair' type='' class='btn btn-danger' style='float:right;margin-top:3px; margin-right: 40px; '>Sair</a>";
          if (isset($_GET['p'])) {
            session_destroy();
            echo("<script>location.href = 'login.html';</script>");
          }
          ?>
        </div>
        <br />
        <br />
        <br />
        <center style="width: 100%; padding-left: 100px; padding-right: 100px;">Este questionário faz parte de um trabalho da matéria de SISTEMAS DE INFORMAÇÃO da Fatec Franca, especificamente para os alunos do segundo semestre do curso de ANÁLISE E DESENVOLVIMENTO DE SISTEMAS.</center>
      </div>
      <br />
      <br />
      <br />
      <div class="row">
        <form class="form-horizontal" id="pesquisase" method="post" action="resposta.php">
          <fieldset>        
            <legend class="topo">Questionário Sócio-Econômico</legend>
           
            <!-- 1Multiple Radios -->
            <div class="form-group" style="width:100%;">
              <label class="col-md-2 control-label" for="radio_curso" style="margin-left:17.5%;">Curso:</label>
              <div class="col-md-6">
              <div class="radio">
                <label for="radio_curso-0">
                  <input type="radio" name="radio_curso" id="radio_curso-0" value="Análise e Desenvolvimento de Sistemas">
                  Análise e Desenvolvimento de Sistemas
                </label>
              </div>
              <div class="radio">
                <label for="radio_curso-1">
                  <input type="radio" name="radio_curso" id="radio_curso-1" value="Gestão da Produção Industrial">
                  Gestão da Produção Industrial
                </label>
              </div>
              <div class="radio">
                <label for="radio_curso-2">
                  <input type="radio" name="radio_curso" id="radio_curso-2" value="Gestão Empresarial - EAD">
                  Gestão Empresarial - EAD
                </label>
              </div>
              </div>
            </div>

            <!-- 2Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput_datadematricula">Data de matrícula</label>  
              <div class="col-md-4">
              <input id="textinput_datadematricula" name="textinput_datadematricula" type="date" class="form-control input-md" method="date" required>
              </div>
            </div>

            <!-- 3Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_periodo">Período:</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_periodo-0">
                  <input type="radio" name="radio_periodo" id="radio_periodo-0" value="Matutino">
                  Matutino
                </label>
              </div>
              <div class="radio">
                <label for="radio_periodo-1">
                  <input type="radio" name="radio_periodo" id="radio_periodo-1" value="Noturno">
                  Noturno
                </label>
              </div>
              </div>
            </div>

            <!-- 4Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_municipioresidencia">Município de Residência:</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_municipioresidencia-0">
                  <input type="radio" name="radio_municipioresidencia" id="radio_municipioresidencia-0" value="Franca">
                  Franca
                </label>
              </div>
              <div class="radio">
                <label for="radio_municipioresidencia-1">
                  <input type="radio" name="radio_municipioresidencia" id="radio_municipioresidencia-1" value="Outro">
                  Outro
                </label>
              </div>
              </div>
            </div>

            <!-- 5Multiple checkBoxs -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="checkBox_telefone">Possui telefone?</label>
              <div class="col-md-4">
              <div class="checkbox">
                <label for="checkBox_telefone-0">
                  <input type="checkbox" name="checkBox_telefone-0" id="checkBox_telefone-0" value="Fixo">
                  Fixo
                </label>
              </div>
              <div class="checkbox">
                <label for="checkBox_telefone-1">
                  <input type="checkbox" name="checkBox_telefone-1" id="checkBox_telefone-1" value="Celular">
                  Celular
                </label>
              </div>
              <div class="checkbox">
                <label for="checkBox_telefone-2">
                  <input type="checkbox" name="checkBox_telefone-2" id="checkBox_telefone-2" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 6Multiple Radios -->
            <div id="operadoras" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="radio_operadoras" id="radio_operadoras">Quantas operadoras?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_operadoras-0">
                  <input type="radio" name="radio_operadoras" id="radio_operadoras-0" value="1">
                  1
                </label>
              </div>
              <div class="radio">
                <label for="radio_operadoras-1">
                  <input type="radio" name="radio_operadoras" id="radio_operadoras-1" value="2">
                  2
                </label>
              </div>
              <div class="radio">
                <label for="radio_operadoras-2">
                  <input type="radio" name="radio_operadoras" id="radio_operadoras-2" value="3">
                  3
                </label>
              </div>
              <div class="radio">
                <label for="radio_operadoras-3">
                  <input type="radio" name="radio_operadoras" id="radio_operadoras-3" value="4 ou mais">
                  4 ou mais
                </label>
              </div>
              </div>
            </div>              

            <!-- 7Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput_datadenascimento">Data de nascimento</label>  
              <div class="col-md-4">
              <input id="textinput_datadenascimento" name="textinput_datadenascimento" type="date" method="date" class="form-control input-md" required> 
              </div>
            </div>

            <!-- 8Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_estadocivil">Estado Civil:</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_estadocivil-0">
                  <input type="radio" name="radio_estadocivil" id="radio_estadocivil-0" value="Solteiro">
                  Solteiro
                </label>
              </div>
              <div class="radio">
                <label for="radio_estadocivil-1">
                  <input type="radio" name="radio_estadocivil" id="radio_estadocivil-1" value="Casado">
                  Casado
                </label>
              </div>
              <div class="radio">
                <label for="radio_estadocivil-2">
                  <input type="radio" name="radio_estadocivil" id="radio_estadocivil-2" value="Outro">
                  Outro
                </label>
              </div>
              </div>
            </div>

            <!-- 9Multiple Radios -->
            <div id="filhos" class="form-group">
              <label class="col-md-4 control-label" for="radio_filhos">Tem filhos?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_filhos-0">
                  <input type="radio" name="radio_filhos" id="radio_filhos-0" value="Não">
                  Não
                </label>
              </div>
              <div class="radio">
                <label for="radio_filhos-1">
                  <input type="radio" name="radio_filhos" id="radio_filhos-1" value="Sim">
                  Sim
                </label>
              </div>
              </div>
            </div>

            <!-- 0Text input-->
            <div id="filhosqnt" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="textinput_qtdefilhos">Quantos?</label>  
              <div class="col-md-4">
              <input id="textinput_qtdefilhos" name="textinput_qtdefilhos" type="number" method="number" class="form-control input-md" required>
              </div>
            </div>

            <!-- 1Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_deficiencia">Portador de deficiência?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_deficiencia-0">
                  <input type="radio" name="radio_deficiencia" id="radio_deficiencia-0" value="Nenhuma">
                  Nenhuma
                </label>
              </div>
              <div class="radio">
                <label for="radio_deficiencia-1">
                  <input type="radio" name="radio_deficiencia" id="radio_deficiencia-1" value="Auditiva">
                  Auditiva
                </label>
              </div>
              <div class="radio">
                <label for="radio_deficiencia-2">
                  <input type="radio" name="radio_deficiencia" id="radio_deficiencia-2" value="Motora">
                  Motora
                </label>
              </div>
              <div class="radio">
                <label for="radio_deficiencia-3">
                  <input type="radio" name="radio_deficiencia" id="radio_deficiencia-3" value="Visual">
                  Visual
                </label>
              </div>
              <div class="radio">
                <label for="radio_deficiencia-4">
                  <input type="radio" name="radio_deficiencia" id="radio_deficiencia-4" value="Múltipla">
                  Múltipla
                </label>
              </div>
              </div>
            </div>

            <!-- 2Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_locomocao">Qual o meio de locomoção utilizado para vir à escola?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_locomocao-0">
                  <input type="radio" name="radio_locomocao" id="radio_locomocao-0" value="Veículo próprio">
                  Veículo próprio
                </label>
              </div>
              <div class="radio">
                <label for="radio_locomocao-1">
                  <input type="radio" name="radio_locomocao" id="radio_locomocao-1" value="Transporte coletivo">
                  Transporte coletivo
                </label>
              </div>
              <div class="radio">
                <label for="radio_locomocao-2">
                  <input type="radio" name="radio_locomocao" id="radio_locomocao-2" value="Veículo terceiros">
                  Veículo terceiros
                </label>
              </div>
              <div class="radio">
                <label for="radio_locomocao-3">
                  <input type="radio" name="radio_locomocao" id="radio_locomocao-3" value="Sem condução">
                  Sem condução
                </label>
                </div>
              </div>
            </div>

            <!-- 3Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_domicilio">Situação do domicílio onde mora:</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_domicilio-0">
                  <input type="radio" name="radio_domicilio" id="radio_domicilio-0" value="Alugado">
                  Alugado
                </label>
              </div>
              <div class="radio">
                <label for="radio_domicilio-1">
                  <input type="radio" name="radio_domicilio" id="radio_domicilio-1" value="Cedido">
                  Cedido
                </label>
              </div>
              <div class="radio">
                <label for="radio_domicilio-2">
                  <input type="radio" name="radio_domicilio" id="radio_domicilio-2" value="Financiado">
                  Financiado
                </label>
              </div>
              <div class="radio">
                <label for="radio_domicilio-3">
                  <input type="radio" name="radio_domicilio" id="radio_domicilio-3" value="Próprio">
                  Próprio
                </label>
              </div>
              </div>
            </div>

            <!-- 4Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="textinput_domicilio">Tempo de moradia:</label>  
              <div class="col-md-4">
              <input id="textinput_domicilio" name="textinput_domicilio" type="number" method="number" class="form-control input-md" required>
              <span class="help-block">Insira tempo em anos</span>  
              </div>
            </div>

            <!-- 5Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_moradores">Com quem mora: </label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_moradores-0">
                  <input type="radio" name="radio_moradores" id="radio_moradores-0" value="Parentes">
                  Parentes
                </label>
              </div>
              <div class="radio">
                <label for="radio_moradores-1">
                  <input type="radio" name="radio_moradores" id="radio_moradores-1" value="Cônjuge">
                  Cônjuge
                </label>
              </div>
              <div class="radio">
                <label for="radio_moradores-2">
                  <input type="radio" name="radio_moradores" id="radio_moradores-2" value="Família">
                  Família
                </label>
              </div>
              <div class="radio">
                <label for="radio_moradores-3">
                  <input type="radio" name="radio_moradores" id="radio_moradores-3" value="Outros">
                  Outros (Republica, amigos, pensão, etc.)
                </label>
              </div>
              </div>
            </div>

            <!-- 6Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_Nfamiliares">Quantas pessoas compõem a sua família, incluindo você:</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_Nfamiliares-0">
                  <input type="radio" name="radio_Nfamiliares" id="radio_Nfamiliares-0" value="1 a 3">
                  1 a 3
                </label>
              </div>
              <div class="radio">
                <label for="radio_Nfamiliares-1">
                  <input type="radio" name="radio_Nfamiliares" id="radio_Nfamiliares-1" value="4 a 6">
                  4 a 6
                </label>
              </div>
              <div class="radio">
                <label for="radio_Nfamiliares-2">
                  <input type="radio" name="radio_Nfamiliares" id="radio_Nfamiliares-2" value="Mais de 6">
                  Mais de 6
                </label>
              </div>
              </div>
            </div>

            <!-- 7Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_atvRemunerada">Quantas pessoas de sua família, incluindo você, exercem atividade remunerada: </label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_atvRemunerada-0">
                  <input type="radio" name="radio_atvRemunerada" id="radio_atvRemunerada-0" value="1">
                  1
                </label>
              </div>
              <div class="radio">
                <label for="radio_atvRemunerada-1">
                  <input type="radio" name="radio_atvRemunerada" id="radio_atvRemunerada-1" value="2">
                  2
                </label>
              </div>
              <div class="radio">
                <label for="radio_atvRemunerada-2">
                  <input type="radio" name="radio_atvRemunerada" id="radio_atvRemunerada-2" value="3">
                  3
                </label>
              </div>
              <div class="radio">
                <label for="radio_atvRemunerada-3">
                  <input type="radio" name="radio_atvRemunerada" id="radio_atvRemunerada-3" value="4 ou mais">
                  4 ou mais
                </label>
              </div>
              </div>
            </div>

            <!-- 8Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_SomaRenda">Qual a soma da renda familiar, em salários mínimos, das pessoas de sua residencia (somar o salário de todos que trabalham e moram na mesma casa): </label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_SomaRenda-0">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-0" value="1">
                  1
                </label>
              </div>
              <div class="radio">
                <label for="radio_SomaRenda-1">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-1" value="2">
                  2
                </label>
              </div>
              <div class="radio">
                <label for="radio_SomaRenda-2">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-2" value="3">
                  3
                </label>
              </div>
              <div class="radio">
                <label for="radio_SomaRenda-3">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-3" value="4">
                  4
                </label>
              </div>
              <div class="radio">
                <label for="radio_SomaRenda-4">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-4" value="5">
                  5
                </label>
              </div>
              <div class="radio">
                <label for="radio_SomaRenda-5">
                  <input type="radio" name="radio_SomaRenda" id="radio_SomaRenda-5" value="Mais que 5">
                  Mais que 5
                </label>
              </div>
              </div>
            </div>

            <!-- 9Multiple Radios -->
            <div class="form-group" style="width:100%">
              <label class="col-md-2 control-label" for="radio_areaTrabalho" style="margin-left:17.5%">Atualmente, em que área você trabalha?</label>
              <div class="col-md-6">
              <div class="radio">
                <label for="radio_areaTrabalho-0">
                  <input type="radio" name="radio_areaTrabalho" id="radio_areaTrabalho-0" value="Na área do curso que escolhi">
                  Na área do curso que escolhi
                </label>
              </div>
              <div class="radio">
                <label for="radio_areaTrabalho-1">
                  <input type="radio" name="radio_areaTrabalho" id="radio_areaTrabalho-1" value="Fora da área do curso que escolhi">
                  Fora da área do curso que escolhi
                </label>
              </div>
              <div class="radio">
                <label for="radio_areaTrabalho-2">
                  <input type="radio" name="radio_areaTrabalho" id="radio_areaTrabalho-2" value="Estou desempregado/a">
                  Estou desempregado/a
                </label>
              </div>
              <div class="radio">
                <label for="radio_areaTrabalho-3">
                  <input type="radio" name="radio_areaTrabalho" id="radio_areaTrabalho-3" value="Nunca trabalhei">
                  Nunca trabalhei
                </label>
              </div>
              </div>
            </div>

            <!-- 0Multiple Radios -->
            <div id="periodot" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="radio_periodoTrabalho">Qual o período?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_periodoTrabalho-0">
                  <input type="radio" name="radio_periodoTrabalho" id="radio_periodoTrabalho-0" value="Manhã ou tarde">
                  Manhã ou tarde
                </label>
              </div>
              <div class="radio">
                <label for="radio_periodoTrabalho-1">
                  <input type="radio" name="radio_periodoTrabalho" id="radio_periodoTrabalho-1" value="Manhã e tarde (integral)">
                  Manhã e tarde (integral)
                </label>
              </div>
              <div class="radio">
                <label for="radio_periodoTrabalho-2">
                  <input type="radio" name="radio_periodoTrabalho" id="radio_periodoTrabalho-2" value="Noite">
                  Noite
                </label>
              </div>
              <div class="radio">
                <label for="radio_periodoTrabalho-3">
                  <input type="radio" name="radio_periodoTrabalho" id="radio_periodoTrabalho-3" value="Por turno">
                  Por turno
                </label>
              </div>
            </div>
              </div>

            <!-- 1Text input-->
            <div id="horast" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="txt_horastrabalhadas">Quantas horas por dia?</label>  
              <div class="col-md-4">
              <input id="txt_horastrabalhadas" name="txt_horastrabalhadas" type="number" method="number" class="form-control input-md" >

              </div>
            </div>

            <!-- 2Multiple Radios -->
            <div id="trocahorario" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="radio_trocardehorario">Pode trocar de horário?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_trocardehorario-0">
                  <input type="radio" name="radio_trocardehorario" id="radio_trocardehorario-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radio_trocardehorario-1">
                  <input type="radio" name="radio_trocardehorario" id="radio_trocardehorario-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 3Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_vidaescolar">Em qual tipo de ensino você estudou no Ensino Médio?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_vidaescolar-0">
                  <input type="radio" name="radio_vidaescolar" id="radio_vidaescolar-0" value="Integral em escola pública">
                  Integral em escola pública
                </label>
              </div>
              <div class="radio">
                <label for="radio_vidaescolar-1">
                  <input type="radio" name="radio_vidaescolar" id="radio_vidaescolar-1" value="Maior parte em escola pública">
                  Maior parte em escola pública
                </label>
              </div>
              <div class="radio">
                <label for="radio_vidaescolar-2">
                  <input type="radio" name="radio_vidaescolar" id="radio_vidaescolar-2" value="Integralmente em escola particular">
                  Integralmente em escola particular
                </label>
              </div>
              <div class="radio">
                <label for="radio_vidaescolar-3">
                  <input type="radio" name="radio_vidaescolar" id="radio_vidaescolar-3" value="Maior parte em escola particular">
                  Maior parte em escola particular
                </label>
              </div>
              </div>
            </div>

            <!-- 4Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="txt_cursouensinomedio">Onde cursou ensino médio?</label>  
              <div class="col-md-4">
              <input id="txt_cursouensinomedio" name="txt_cursouensinomedio" type="text" placeholder="" class="form-control input-md" required>

              </div>
            </div>

            <!-- 5Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_conhecimentoinformatica">Tem conhecimento em informática?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_conhecimentoinformatica-0">
                  <input type="radio" name="radio_conhecimentoinformatica" id="radio_conhecimentoinformatica-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radio_conhecimentoinformatica-1">
                  <input type="radio" name="radio_conhecimentoinformatica" id="radio_conhecimentoinformatica-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 6Multiple Radios -->
            <div id="nivelinfo" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="radio_conhecimentosim">Qual seu nível de conhecimento?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_conhecimentosim-0">
                  <input type="radio" name="radio_conhecimentosim" id="radio_conhecimentosim-0" value="Básico">
                  Básico
                </label>
              </div>
              <div class="radio">
                <label for="radio_conhecimentosim-1">
                  <input type="radio" name="radio_conhecimentosim" id="radio_conhecimentosim-1" value="Intermediário">
                  Intermediário
                </label>
              </div>
              <div class="radio">
                <label for="radio_conhecimentosim-2">
                  <input type="radio" name="radio_conhecimentosim" id="radio_conhecimentosim-2" value="Avançado">
                  Avançado
                </label>
              </div>
              </div>
            </div>

            <!-- 7Multiple checkBoxs -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="checkBox_computadoresemcasa">Tem computador?</label>
              <div class="col-md-4">
              <div class="checkbox">
                <label for="checkBox_computadoresemcasa-0">
                  <input type="checkbox" name="checkBox_computadoresemcasa-0" id="checkBox_computadoresemcasa-0" value="De mesa">
                  De mesa
                </label>
              </div>
              <div class="checkbox">
                <label for="checkBox_computadoresemcasa-1">
                  <input type="checkbox" name="checkBox_computadoresemcasa-1" id="checkBox_computadoresemcasa-1" value="Notebook">
                  Notebook
                </label>
              </div>
              </div>
            </div>

            <!-- 8Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_internet">Tem internet em casa?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_internet-0">
                  <input type="radio" name="radio_internet" id="radio_internet-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radio_internet-1">
                  <input type="radio" name="radio_internet" id="radio_internet-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 9Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_IDIOMAS">Conhece mais idiomas?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_IDIOMAS-0">
                  <input type="radio" name="radio_IDIOMAS" id="radio_IDIOMAS-0" value="Nenhum">
                  Nenhum
                </label>
              </div>
              <div class="radio">
                <label for="radio_IDIOMAS-1">
                  <input type="radio" name="radio_IDIOMAS" id="radio_IDIOMAS-1" value="Inglês">
                  Inglês
                </label>
              </div>
              <div class="radio">
                <label for="radio_IDIOMAS-2">
                  <input type="radio" name="radio_IDIOMAS" id="radio_IDIOMAS-2" value="Espanhol">
                  Espanhol
                </label>
              </div>
              <div class="radio">
                <label for="radio_IDIOMAS-3">
                  <input type="radio" name="radio_IDIOMAS" id="radio_IDIOMAS-3" value="Ambos">
                  Ambos
                </label>
              </div>
              <div class="radio">
                <label for="radio_IDIOMAS-4">
                  <input type="radio" name="radio_IDIOMAS" id="radio_IDIOMAS-4" value="Outros">
                  Outros
                </label>
              </div>
              </div>
            </div>

            <!-- 0Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_cursosuperior">Já fez outro curso superior?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_cursosuperior-0">
                  <input type="radio" name="radio_cursosuperior" id="radio_cursosuperior-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radio_cursosuperior-1">
                  <input type="radio" name="radio_cursosuperior" id="radio_cursosuperior-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 1Text input-->
            <div id="jafez" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="textinput_curso1">Qual curso?</label>  
              <div class="col-md-4">
              <input id="textinput_curso1" name="textinput_curso1" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- 2Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radio_cursandocurso">Está fazendo outro Curso Superior?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radio_cursandocurso-0">
                  <input type="radio" name="radio_cursandocurso" id="radio_cursandocurso-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radio_cursandocurso-1">
                  <input type="radio" name="radio_cursandocurso" id="radio_cursandocurso-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 3Text input-->
            <div id="cursando" class="form-group" style="display:none">
              <label class="col-md-4 control-label color" for="textinput_fazendocurso">Qual curso?</label>  
              <div class="col-md-4">
              <input id="textinput_fazendocurso" name="textinput_fazendocurso" type="text" placeholder="" class="form-control input-md">

              </div>
            </div>

            <!-- 4Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="radios_enem">Você prestou o ENEM?</label>
              <div class="col-md-4">
              <div class="radio">
                <label for="radios_enem-0">
                  <input type="radio" name="radios_enem" id="radios_enem-0" value="Sim">
                  Sim
                </label>
              </div>
              <div class="radio">
                <label for="radios_enem-1">
                  <input type="radio" name="radios_enem" id="radios_enem-1" value="Não">
                  Não
                </label>
              </div>
              </div>
            </div>

            <!-- 5Text input-->
            <div id="notaenem" class="form-group color" style="display:none">
              <label class="col-md-4 control-label color" for="textinput_notaenem">Qual a sua nota?</label>  
              <div class="col-md-4">
              <input id="textinput_notaenem" name="textinput_notaenem" type="number" method="number" class="form-control input-md">

              </div>
            </div>

            <!-- 6Textarea -->
            <div class="form-group" id="textarea_motivo">
              <label class="col-md-4 control-label" for="textarea_motivo" >Porque você prestou vestibular nessa escola?</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="textarea_motivo" name="textarea_motivo"></textarea>
              </div>
            </div>
       
            <div class="well text-center">
               <button type="submit" class="btn btn-fresh btn-lg submit" name="enviar">Enviar</button>
            </div>
       
          </fieldset>
        </form>      
      </div>  
  </body>
</html>
