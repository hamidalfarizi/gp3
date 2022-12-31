<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Santri yang melanggar dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?></h1>
	</div>
		
    <div class="card shadow mb-6">
        <div class="card-body">
            <canvas id="grafikpelanggaran"></canvas>
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

<script>
	window.onload = function () {
		// window.print();
	};
</script>

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
		labels: ["Ghosob", "Tidak Pakai Sendal", "Menjemur Pakaian Di Luar Lemari", "Tidak Mengunci Lemari",
		 "Tidak Memakai Perlengkapan Lengkap", "terlambat", "Tidak Memakai Papan Nama", "Sembunyi Dari Kegiatan", "Kabur Ketika Mobilisasi",
		  "Mencuri", "Berkelahi", "Kabur Dari Pondok", "Berhubungan Dengan Orang Kampung", "Melawan Pembantu Pimpinan Pondok", "Terlambat Ke Masjid",
		   "Menyeret Sandal",],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ <?php echo $dataghosob ?>, <?php echo $datatidakpakaisendal ?>,<?php echo $datamenjemurpakaian ?>,
			<?php echo $datatidakmenguncilemari ?>, <?php echo $datatidakmemakaiperlengkapanlengkap ?>,<?php echo $dataterlambat ?>,
			<?php echo $datatidakmemakaipapannama ?>, <?php echo $datasembunyidarikegiatan ?>,<?php echo $datakaburketikamobilisasi ?>,
			<?php echo $datamencuri ?>, <?php echo $databerkelahi ?>,<?php echo $datakaburdaripondok ?>,
			<?php echo $databerhubungandenganorangkampung ?>, <?php echo $datamelawanpembantupimpinanpondok ?>,<?php echo $dataterlambatkemasjid ?>,
			<?php echo $datamenyeretsandal ?>,
			 
		
		
		],
			
			
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Santri Pondok Modern Darussalam Gontor Kampus 2'
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
</script>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>