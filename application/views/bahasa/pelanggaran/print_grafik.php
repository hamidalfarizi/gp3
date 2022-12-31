<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Santri yang melanggar dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?></h1>
	</div>
		
    <div class="card shadow mb-6">
        <div class="card-body">
			<div class="chartBox">
				<canvas id="grafikpelanggaran"></canvas>
				<button class='btn btn-primary' onclick="download()">Download</button>
			</div>
        </div>
    </div>
</div>

<style>
	.chartBox {
        width: 100%;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(alpha);
        background: white;
      }
</style>


<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Pusat Data Gontor 2</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<script src="<?= base_url('assets/vendor/chart.js/Chart.js'); ?>"></script>
<script src="<?= base_url()?>assets/vendor/jquery/jquery.js"></script>

<script>
	
	function getRandomColor() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
    }
				
	// Pie Chart Example
	new Chart(document.getElementById("grafikpelanggaran"), {
		type: 'bar',
		data: {
		labels: ["Berbicara Bahasa Indonesia", "Berbicara Bahasa Daerah", "Berbicara Perkataan Kasar"],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			 getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ 
				<?php echo $databerbicarabahasaindonesia ?>, <?php echo $databerbicarabahasadaerah ?>, <?php echo $databerbicaraperkataankasar ?>,
			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Bahasa Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>'
		},
        scales: {
            yAxes: [{
                ticks: {
					stepSize: 2,
					beginAtZero: true
				}
            }]
        }
		}
	});

	function download (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafikpelanggaran');
		imageLink.download = 'Jumlah Pelanggaran Bahasa Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};
</script>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>