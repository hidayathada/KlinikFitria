<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="main-container">
		<div class="pd-ltr-20">
			<div class="row">
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Jumlah Pasien Bulan Ini</h2>
						<div id="chart5"><?= $currentPasien?></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Total Obat</h2>
						<div id="chart6"><?= $numObat?></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Jumlah Tindakan Bulan Ini</h2>
						<div id="chart6"><?= $currentTindakan?></div>
					</div>
				</div>
			</div>
        </div>
		<div class="pd-ltr-20">
			<div class="row">
				<div class="col-xl-12 mb-30">
					<div class="card-box height-100-p pd-20">
                    <canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
        </div>
        <script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>