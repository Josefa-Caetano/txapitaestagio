<?php require_once 'header.php'; ?>


<!-- Breadcrumbs-->
<!--
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="estatistica.php">Estat&iacute;stica</a>
    </li>
    <li class="breadcrumb-item active">Gr&aacute;ficos</li>
</ol>

--/>
<?php require_once 'cards.html'; ?>








<!doctype html>
<html>

<head>
	<title><!-- Chart with xAxis Filtering --></title>
	<script src="chart/dist/Chart.bundle.js"></script>
	<script src="chart/utils.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>
</head>

<body >
	<div style="width:70%; height: auto " >
		<canvas id="canvas"></canvas>
	</div>
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100 * (Math.random() > 0.5 ? 1 : 1)) + 50;
		};

		var config = {
			type: 'line',
			data: {
				labels: ['Janeiro','Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				datasets: [{
					label: 'ENTRADA',
					fill: false,
					borderColor: window.chartColors.green,
					backgroundColor: window.chartColors.green,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				},{
					label: 'SAIDA',
					fill: false,
					borderColor: window.chartColors.red,
					backgroundColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()

					]
				}, {
					label: 'RESIDUAL',
					fill: false,
					borderColor: window.chartColors.blue,
					backgroundColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				}]
			},
			options: {
				

//MOSTRAR TITULO DO CHART
				// responsive: true,
				// title: {
				// 	display: true,
				// 	text: 'Chart.js Line Chart - X-Axis Filter'
				// },
				scales: {
					xAxes: [{
						display: true,
						ticks: {
							callback: function(dataLabel, index) {
								// Hide the label of every 2nd dataset. return null to hide the grid line too
								return index % 1 === 0 ? dataLabel : ''; //Mostrar todos meses. se colocar 2 alem de 1 vai mostrar 1 mes sim outra nao
							}
						}
					}],
					yAxes: [{
						display: true,
						beginAtZero: false
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
</body>

</html>































 <?php 
// require_once 'chart/chart.html'; 
?>


<!-- Footer -->
<?php 
require_once 'footer.php';
 ?> 

