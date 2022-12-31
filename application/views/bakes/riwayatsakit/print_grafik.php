<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><strong>Data Santri Yang Sakit dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?></strong></h1>
	</div>
		
    <div class="card shadow mb-6">
        <div class="card-body">
			<canvas id="grafiksakit"></canvas>
			<button class='btn btn-primary' onclick="download()">Download</button>
        </div>
    </div>
</div>

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
	new Chart(document.getElementById("grafiksakit"), {
		type: 'bar',
		data: {
		labels: ["Demam", "Pusing", "Muntaber", "Mencret",
		"Tipes", "Patah Tulang", "Scabies", "Cacar",
		],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),  getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ <?php echo $datademam ?>, <?php echo $datapusing ?>,<?php echo $datamuntaber ?>,<?php echo $datamencret ?>, 
			<?php echo $datatipes ?>,<?php echo $datapatahtulang ?>,<?php echo $datascabies ?>, <?php echo $datacacar ?>,
			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Santri Yang Sakit dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>'
		},
        scales: {
            yAxes: [{
                ticks: {
					beginAtZero: true
				}
            }]
        }
		}
	});

	function download (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafiksakit');
		imageLink.download = 'Jumlah Santri Yang Sakit dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};
</script>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>