google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hods Day'],
          ['Franca',     <?php echo $franca->num_rows;?>],
          ['Outros',      <?php echo $outros->num_rows;?>]
        ]);

        var options = {
          title: 'Reside em Franca'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }