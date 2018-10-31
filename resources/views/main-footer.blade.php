
	<footer class="main-footer">
	<div class="footer-left">
	  Copyright &copy; 2018 <div class="bullet"></div> Todos os direitos reservados. </a>
	</div>
	<div class="footer-right"></div>
	</footer>
	
  <script type="text/javascript" src="js/modules/jquery.min.js"></script>
  <script type="text/javascript" src="js/modules/popper.js"></script>
  <script type="text/javascript" src="js/modules/tooltip.js"></script>
  <script type="text/javascript" src="js/modules/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script type="text/javascript" src="js/js/sa-functions.js"></script>
  
  <script type="text/javascript" src="js/modules/chart.min.js"></script>
  <script type="text/javascript" src="js/modules/summernote/summernote-lite.js"></script>

  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        label: 'Statistics',
        data: [460, 458, 330, 502, 430, 610, 488],
        borderWidth: 2,
        backgroundColor: 'rgb(87,75,144)',
        borderColor: 'rgb(87,75,144)',
        borderWidth: 2.5,
        pointBackgroundColor: '#ffffff',
        pointRadius: 4
      }]
    },
    options: {
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 150
          }
        }],
        xAxes: [{
          gridLines: {
            display: false
          }
        }]
      },
    }
  });
  </script>
  <script type="text/javascript" src="js/js/scripts.js"></script>
  <script type="text/javascript" src="js/js/custom.js"></script>
  <script type="text/javascript" src="js/js/demo.js"></script>
	

</body>
</html>