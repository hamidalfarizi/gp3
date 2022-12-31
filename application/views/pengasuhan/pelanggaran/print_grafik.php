<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Santri yang melanggar dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?></h1>
	</div>

	<div class="card">
		<div class="card-body">
			<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">RINGAN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">SEDANG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">BERAT</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								PELANGGARAN RINGAN
							</div>
							<div class="card-body">
									<!-- CHART -->
									<canvas id="ringan"></canvas>
									<button class='btn btn-primary' onclick="download_ringan()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								PELANGGARAN SEDANG
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="sedang"></canvas>
								<button class='btn btn-primary' onclick="download_sedang()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								PELANGGARAN BERAT
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="berat"></canvas>
								<button class='btn btn-primary' onclick="download_berat()">Download</button>
							</div>
						</div>
					</div>
				</div>
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
	
	///////////////////////////////////////////////////////////////////////// GRAFIK //////////////////////////////////////////////////////////////////////////////////////

	// PELANGGARAN RINGAN
	var myPieChart = new Chart(document.getElementById("ringan"), {
		type: 'bar',
		data: {
		labels: ["Ghosob", "Tidak Pakai Sendal", "Menjemur Pakaian Di Kamar", "Tidak Mengunci Lemari",
		 "Tidak Memakai Perlengkapan Lengkap", "Terlambat Ke Masjid", "Menyeret Sandal", "Mengeluarkan Baju Dengan Sengaja",
		"Tidak Pernah Ikut Latihan", "Ghoib Absen", "Memakai Sandal Di Atas Lantai", "Makan Berdiri",],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			 getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Ghosob'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Pakai Sendal'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Menjemur Pakaian Di Kamar'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Mengunci Lemari'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Memakai Perlengkapan Lengkap'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Terlambat Ke Masjid'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Menyeret Sandal'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Mengeluarkan Baju Dengan Sengaja'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Pernah Ikut Latihan'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Ghoib Absen'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Memakai Sandal Di Atas Lantai'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Makan Berdiri'")->num_rows(); ?> ,  

			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Ringan Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>'
		},
        scales: {
            yAxes: [{
                ticks: {
					beginAtZero: true,
					fixedStepSize: 2
				}
            }]
        }
		}
	});

	// PELANGGARAN SEDANG
	new Chart(document.getElementById("sedang"), {
		type: 'bar',
		data: {
		labels: ["Menerlambatkan Diri", "Tidak Memakai Papan Nama", "Sembunyi dari Kegiatan", "Kabur Ketika Mobilisasi", 
		"Mokel", "Tidak Datang Panggilan Bagian Lebih dari 3 hari", "Terlambat Ke Masjid Ketika Adzan", "Bermain Permainan Di Kamar", 
		"Tidak Kembali Ke Rayon", "Minum Berdiri", "Absen Ketika Waktu Sholat", "Blacklist", 
		"Tidak Melakukan Piket Kamar", "Tidak Membaca Al-Quran", ],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			 getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Menerlambatkan Diri'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Memakai Papan Nama'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Sembunyi dari Kegiatan'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Kabur Ketika Mobilisasi'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Mokel'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Datang Panggilan Bagian Lebih dari 3 hari'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Terlambat Ke Masjid Ketika Adzan'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Bermain Permainan Di Kamar'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Kembali Ke Rayon'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Minum Berdiri'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Absen Ketika Waktu Sholat'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Blacklist'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Melakukan Piket Kamar'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Membaca Al-Quran'")->num_rows(); ?>,

			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Sedang Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>'
		},
        scales: {
            yAxes: [{
                ticks: {
					beginAtZero: true,
					fixedStepSize: 2
				}
            }]
        }
		}
	});


	// PELANGGARAN BERAT
	new Chart(document.getElementById("berat"), {
		type: 'bar',
		data: {
		labels: ["Melanggar Norma Susila", "Mencuri", "Berkelahi", "Kabur Dari Pondok", 
		"Berhubungan Dengan Orang Kampung", "Membully", "Melawan Pembantu Pimpinan Pondok", "Melakukan Kekerasan Fisik", 
		"Melakukan Pemungutan Liar (Pungli)", "Keluar Pondok Tanpa Izin", "Berbohong", "Meremehkan Pengurus Rayon", 
		"Tidak Pergi Ke Masjid", "Membawa Alat Elektronik", ],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			 getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[ 
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melanggar Norma Susila'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Mencuri'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Berkelahi'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Kabur Dari Pondok'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Berhubungan Dengan Orang Kampung'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Membully'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melawan Pembantu Pimpinan Pondok'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melakukan Kekerasan Fisik'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Melakukan Pemungutan Liar (Pungli)'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Keluar Pondok Tanpa Izin'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Berbohong'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Meremehkan Pengurus Rayon'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Tidak Pergi Ke Masjid'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$tanggalawal' AND '$tanggalakhir' HAVING nama_pelanggaran = 'Membawa Alat Elektronik'")->num_rows(); ?>,

			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Berat Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>'
		},
        scales: {
            yAxes: [{
                ticks: {
					beginAtZero: true,
					fixedStepSize: 2
				}
            }]
        }
		}
	});

	///////////////////////////////////////////////////////////////////////// FUNCTION DOWNLOAD //////////////////////////////////////////////////////////////////////////////////////

	function download_ringan (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('ringan');
		imageLink.download = 'Jumlah Pelanggaran Ringan Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	function download_sedang (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('sedang');
		imageLink.download = 'Jumlah Pelanggaran Sedang Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	function download_berat (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('berat');
		imageLink.download = 'Jumlah Pelanggaran Berat Santri Pondok Modern Darussalam Gontor Kampus 2 dari tanggal <?php echo tanggal_indo ($tanggalawal) ?> hingga <?php echo tanggal_indo ($tanggalakhir) ?>.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	///////////////////////////////////////////////////////////////////////// FUNCTION CLICK //////////////////////////////////////////////////////////////////////////////////////

	// CLICK RINGAN
	var canvasP = document.getElementById("ringan");
	canvasP.onclick = function(e) {
	var slice = myPieChart.getElementAtEvent(e);
	if (!slice.length) return; // return if not clicked on slice
	var label = slice[0]._model.label;
	switch (label) {
		// add case for each label/slice
		case 'Ghosob':
			// alert('clicked on Ghosob');
			window.open('filterbykategoriweb/ghosob');
			break;
		case 'Tidak Pakai Sendal':
			// alert('clicked on slice 6');
			window.open('filterbykategoriweb/tidakpakaisandal');
			break;
		// add rests ...
	}
	}

</script>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>