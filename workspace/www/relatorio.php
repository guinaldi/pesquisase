<html>
	<head>
    <meta charset="utf-8">
		<title>Relatorio</title>
		<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['corechart']}]}"></script>
		<link href="assets/css/resultados.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
    <script type="text/javascript">    
     $(document).ready(function () {          
       $('#menu1').click(function () {
           $('#faixaEtaria').css('display', 'block');
           $('#estadoCivil').css('display', 'none');
           $('#filhos').css('display', 'none');
           $('#resideFranca').css('display', 'none');
           $('#residenciaPropria').css('display', 'none');
           $('#quemMora').css('display', 'none');
           $('#composicaoFamiliar').css('display', 'none');
           $('#atividadeFamilia').css('display', 'none');
           $('#rendaFamiliar').css('display', 'none');
           $('#areaTrabalho').css('display', 'none');
           $('#vidaEscolar').css('display', 'none');
           $('#conhecimentoInfo').css('display', 'none');
           $('#idiomas').css('display', 'none');
           $('#deficiencia').css('display', 'none');
       });  
     });
</script>
	</head>
	<body>
    <nav>
      <div class="navicon">
        <div></div>
      </div>
      <a id="menu1">Faixa Etária</a>
      <a id="menu2">Estado Civil</a>
      <a id="menu3">Filhos</a>
      <a id="menu4">Reside em Franca</a>
      <a id="menu5">Residência Própria</a>
      <a id="menu6">Com quem mora</a>
      <a id="menu7">Composição Familiar</a>
      <a id="menu8">Atividade Remunerada Familiar</a>
      <a id="menu9">Renda Familiar</a>
      <a id="menu10">Área de Trabalho</a>
      <a id="menu11">Vida Escolar</a>
      <a id="menu12">Tem Conhecimento em Informática</a>
      <a id="menu13">Idiomas</a>
      <a id="menu14">Deficiência</a>
      <a id="menu15">Locomoção</a>
    </nav>
		<div style="width:90%; margin-left:400px;">            
        <div id="faixaEtaria" style="display:block" height="600" width="400"></div>
        <div id="estadoCivil" style="display:block" height="450" width="450"></div>  
        <div id="filhos" style="display:block" height="450" width="450"></div>		
        <div id="resideFranca" style="display:block" height="450" width="450"></div>  
        <div id="residenciaPropria" style="display:block" height="450" width="450"></div>  
        <div id="quemMora" style="display:block" height="450" width="450"></div>  
        <div id="composicaoFamiliar" style="display:block" height="450" width="450"></div>  
        <div id="atividadeFamilia" style="display:block" height="450" width="450"></div>  
        <div id="rendaFamiliar" style="display:block" height="450" width="450"></div>  
        <div id="areaTrabalho" style="display:block" height="450" width="450"></div>  
        <div id="vidaEscolar" style="display:block" height="450" width="450"></div>  
        <div id="conhecimentoInfo" style="display:block" height="450" width="450"></div>  
        <div id="idiomas" style="display:block" height="450" width="450"></div>  
        <div id="deficiencia" style="display:block" height="450" width="450"></div>
        <div id="locomocao" style="display:block" height="450" width="450"></div>
    </div>

<?php
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
    
include 'includes/reside_franca.php';   
include 'includes/faixa_etaria.php'; 
include 'includes/com_quem_mora.php';
include 'includes/estado_civil.php';
include 'includes/filhos.php';
include 'includes/locomocao.php';
include 'includes/residencia_propria.php';   
include 'includes/area_de_trabalho.php';
include 'includes/atividade_remunerada_familiares.php';
include 'includes/composicao_familiar.php';
include 'includes/conhecimento_info.php';
include 'includes/deficiencia.php';
include 'includes/idiomas.php';
include 'includes/renda_familiar.php';
include 'includes/vida_escolar.php';

    ?>
	
	</body>
</html>
<script>
      google.setOnLoadCallback(drawChart);
      function drawChart() {
      //Reside em Franca
         var data_reside_franca = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Franca',     <?php echo $franca->num_rows;?>],
          ['Outros',      <?php echo $outros->num_rows;?>]
        ]);
        var options_reside_franca = {
          title: 'Reside em Franca'
        };
        var reside_franca = new google.visualization.PieChart(document.getElementById('resideFranca'));
        reside_franca.draw(data_reside_franca, options_reside_franca);
       //Faixa Etária
       var dados_faixa_etaria = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Ate 20 anos',     <?php echo $ate_20->num_rows;?>],
          ['De 21 ate 30 anos',      <?php echo $de21_a30->num_rows;?>],
          ['De 31 ate 40 anos',      <?php echo $de31_a40->num_rows;?>],
          ['Acima de 40 anos',      <?php echo $maior_40->num_rows;?>]
        ]);
        var options_faixa_etaria = {
          title: 'Faixa etária'
        };
        var faixa_etaria = new google.visualization.PieChart(document.getElementById('faixaEtaria'));
        faixa_etaria.draw(dados_faixa_etaria, options_faixa_etaria);
        //Residencia propria
        var dados_residencia_propria = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Sim',     <?php echo $residencia_propria_sim->num_rows;?>],
          ['Não',      <?php echo $residencia_propria_nao->num_rows;?>]         
        ]);
        var options_residencia_propria = {
          title: 'Residencia Propria'
        };
        var residencia_propria = new google.visualization.PieChart(document.getElementById('residenciaPropria'));
        residencia_propria.draw(dados_residencia_propria, options_residencia_propria);
       
        //Filhos
       var dados_filhos = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Sim',     <?php echo $filhos_sim->num_rows;?>],
          ['Não',      <?php echo $filhos_nao->num_rows;?>]
        ]);
        var options_filhos = {
          title: 'Filhos'
        };
        var filhos = new google.visualization.PieChart(document.getElementById('filhos'));
        filhos.draw(dados_filhos, options_filhos);
        //Estado Civil
       var dados_estado_civil = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Solteiro',     <?php echo $solteiro->num_rows;?>],
          ['Casado',      <?php echo $casado->num_rows;?>],
          ['Outros',      <?php echo $outros->num_rows;?>]
        ]);
        var options_estado_civil = {
          title: 'Estado Civil '
        };
        var estado_civil = new google.visualization.PieChart(document.getElementById('estadoCivil'));
        estado_civil.draw(dados_estado_civil, options_estado_civil);
        //Area de trabalho
       var dados_area_trabalho = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Na Área',     <?php echo $na_Area->num_rows;?>],
          ['Fora da Área',      <?php echo $fora_Area->num_rows;?>],
          ['Desempregrado',      <?php echo $desempregado->num_rows;?>],
          ['Nunca Trabalhou',      <?php echo $nunca_trabalhou->num_rows;?>]
        ]);
        var options_area_trabalho = {
          title: 'Area de trabalho'
        };
        var area_trabalho = new google.visualization.PieChart(document.getElementById('areaTrabalho'));
        area_trabalho.draw(dados_area_trabalho, options_area_trabalho);
        //Familiares que exercem atividade remunerada 
       var dados_atv_remunerda = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Um',     <?php echo $um->num_rows;?>],
          ['Dois',      <?php echo $dois->num_rows;?>],
          ['Três',      <?php echo $tres->num_rows;?>],
          ['Quatro ou mais',      <?php echo $quatro_ou_mais->num_rows;?>]
        ]);
        var options_atv_remunerda = {
          title: 'Familiares que exercem atividade remunerada'
        };
        var atv_remunerda = new google.visualization.PieChart(document.getElementById('atividadeFamilia'));
        atv_remunerda.draw(dados_atv_remunerda, options_atv_remunerda);
        //Com quem Mora
       var dados_com_quem_mora= google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Familia',     <?php echo $familia->num_rows;?>],
          ['Parentes',      <?php echo $parentes->num_rows;?>],
          ['Conjuge',      <?php echo $conjuge->num_rows;?>]
        ]);
        var options_com_quem_mora = {
          title: 'Com quem Mora'
        };
        var com_quem_mora = new google.visualization.PieChart(document.getElementById('quemMora'));
        com_quem_mora.draw(dados_com_quem_mora, options_com_quem_mora);
        //Composição Familiar
       var dados_comp_familiar = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Até 3',     <?php echo $ate_3->num_rows;?>],
          ['De 4 a 6',      <?php echo $de4_a6->num_rows;?>],
          ['Acima de 6',      <?php echo $acima_6->num_rows;?>]
        ]);
        var options_comp_familiar = {
          title: 'Composição Familiar'
        };
        var comp_familiar = new google.visualization.PieChart(document.getElementById('composicaoFamiliar'));
        comp_familiar.draw(dados_comp_familiar, options_comp_familiar);
        //Conhecimento em informática
       var dados_con_info = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Sim',     <?php echo $sim->num_rows;?>],
          ['Não',      <?php echo $nao->num_rows;?>],
          ['Acima de 6',      <?php echo $acima_6->num_rows;?>]
        ]);
        var options_con_info = {
          title: 'Conhecimento em informática'
        };
        var con_info = new google.visualization.PieChart(document.getElementById('conhecimentoInfo'));
        con_info.draw(dados_con_info, options_con_info);
       //Deficiência
       var dados_deficiencia = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Nenhuma',     <?php echo $nenhuma->num_rows;?>],
          ['Auditiva',      <?php echo $auditiva->num_rows;?>],
          ['Motora',      <?php echo $motora->num_rows;?>],
          ['Visual',      <?php echo $visual->num_rows;?>],
          ['Multipla',      <?php echo $multipla->num_rows;?>]
        ]);
        var options_deficiencia = {
          title: 'Deficiência'
        };
        var deficiencia = new google.visualization.PieChart(document.getElementById('deficiencia'));
        deficiencia.draw(dados_deficiencia, options_deficiencia);
        //Idiomas
       var dados_idiomas = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Nenhum',     <?php echo $nenhum->num_rows;?>],
          ['Ingles',      <?php echo $ingles->num_rows;?>],
          ['Espanhol',      <?php echo $espanhol->num_rows;?>],
          ['Ambos',      <?php echo $ambos_idioma->num_rows;?>],
          ['Outros',      <?php echo $outros->num_rows;?>]
        ]);
        var options_idiomas = {
          title: 'Idiomas'
        };
        var idiomas = new google.visualization.PieChart(document.getElementById('idiomas'));
        idiomas.draw(dados_idiomas, options_idiomas);
         //Renda Familiar (Salario Minimo)
       var dados_renda = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Um',     <?php echo $um->num_rows;?>],
          ['Dois',      <?php echo $dois->num_rows;?>],
          ['Três',      <?php echo $tres->num_rows;?>],
          ['Quatro',      <?php echo $quatro->num_rows;?>],
          ['Cinco',      <?php echo $cinco->num_rows;?>],
          ['Acima de 5',      <?php echo $mais_cinco->num_rows;?>]
        ]);
        var options_renda = {
          title: 'Renda Familiar (Salario Minimo)'
        };
        var renda = new google.visualization.PieChart(document.getElementById('rendaFamiliar'));
        renda.draw(dados_renda, options_renda);
        //Vida Escolar
       var dados_vd_escolar = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Inteira em Escola Pública',     <?php echo $int_publica->num_rows;?>],
          ['Inteira em Escola Particular',      <?php echo $int_part->num_rows;?>],
          ['Ambos',      <?php echo $ambos->num_rows;?>],
          ['Maior parte em Escola Pública',      <?php echo $maior_publica->num_rows;?>],
          ['Maior parte em Escola Particular',      <?php echo $maior_part->num_rows;?>]
        ]);
        var options_vd_escolar = {
          title: 'Vida Escolar'
        };
        var vd_escolar = new google.visualization.PieChart(document.getElementById('vidaEscolar'));
        vd_escolar.draw(dados_vd_escolar, options_vd_escolar);
        ///Locomocao
       var dados_locomocao = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Veículo Próprio',     <?php echo $veiculo_proprio->num_rows;?>],
          ['Coletivo',      <?php echo $coletivo->num_rows;?>],
          ['Sem Condução',      <?php echo $sem_conducao->num_rows;?>],
          ['Veículo Terceiro',      <?php echo $veiculos_terceiros->num_rows;?>]          
        ]);
        var options_locomocao = {
          title: 'Locomoção',
          pieHole: 0.2
        };
        var locomocao = new google.visualization.PieChart(document.getElementById('locomocao'));
        locomocao.draw(dados_locomocao, options_locomocao);
     
      }
	</script>