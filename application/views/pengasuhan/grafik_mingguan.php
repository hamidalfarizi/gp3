<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="card-header py-3">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800"><strong>Grafik Mingguan Pengasuhan Santri</strong></h1>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">JUMLAH PELANGGARAN SANTRI PERMINGGU</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">JUMLAH PERIZINAN SANTRI PERMINGGU</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">JUMLAH SANTRI YANG DIHUKUM OLEH KEAMANAN</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" id="pills-keamanan-tab" data-toggle="pill" href="#pills-keamanan" role="tab" aria-controls="pills-keamanan" aria-selected="false">JUMLAH SANTRI YANG DIHUKUM OLEH KEAMANAN</a>
				</li> -->
			</ul>
		</div>
		<div class="card-body">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
									JUMLAH PELANGGARAN SANTRI PERMINGGU
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikpelanggaran"></canvas>
								<button class='btn btn-primary' onclick="download_grafikpelanggaran()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
									JUMLAH PERIZINAN SANTRI PERMINGGU
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikperizinan"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
							JUMLAH SANTRI YANG DIHUKUM OLEH KEAMANAN
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikpenghukum"></canvas>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="tab-pane fade" id="pills-keamanan" role="tabpanel" aria-labelledby="pills-keamanan-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
									JUMLAH SANTRI PER-RAYON
							</div>
							<div class="card-body">
									CHART
								<canvas id="grafikrayon"></canvas>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>		
	</div>

	<br>

	<!-- content row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Pusat Data Gontor 2
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>


<!-- ////////////////////////////////////////////////////////////////////////////////GRAFIK///////////////////////////////////////////////////////////////////////////////////////// -->
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

	function download_grafikpelanggaran (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafikpelanggaran');
		imageLink.download = 'Jumlah Pelanggaran Santri Pondok Modern Darussalam Gontor Kampus 2 Minggu Ini.jpg';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	<?php 
		$date = date("Y-m-d");
		$d1 = strtotime("+1 Day");
		$date1 = date("Y-m-d", $d1);
		$d = strtotime("-1 Week");
		$date7ago = date("Y-m-d", $d); 
	?>

</script>

<!-- ////////////////////////////////////////////////////////////////////////////////GRAFIK RAYON///////////////////////////////////////////////////////////////////////////////////////// -->
<script>

	// Bar Chart Example
	new Chart(document.getElementById("grafikrayon"), {
		type: 'bar',
		data: {
		labels: ["Al Azhar Lt.1", "Al Azhar Lt.2", "Santiniketan", "Aligarh", "Syanggit Lt. 1", "Syanggit Lt. 2", "Palestina", "Makkah", "Tunisia Lt. 1", "Tunisia Lt. 2", "Sudan", "Syiria Lt. 1", "Syiria Lt. 2",],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Al Azhar Lt.1'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Al Azhar Lt.2'")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Santiniketan'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Aligarh'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syanggit Lt. 1'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syanggit Lt. 2'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Palestina'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Makkah'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Tunisia Lt. 1'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Tunisia Lt. 2'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Sudan'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syiria Lt. 1'")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syiria Lt. 2'")->num_rows(); ?>],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Rayon'
		}
		}
	});

</script>

<!-- ////////////////////////////////////////////////////////////////////////GRAFIK PELANGGARAN MINGGUAN/////////////////////////////////////////////////////////////////////////////////// -->

<script>

	// Bar Chart Example
	new Chart(document.getElementById("grafikpelanggaran"), {
		type: 'bar',
		data: {
		labels: ["Ghosob", "Tidak Pakai Sendal", "Menjemur Pakaian Di Kamar", "Tidak Mengunci Lemari", "Tidak Memakai Perlengkapan lengkap",
		"Terlambat", "Tidak Memakai Papan Nama", "Sembunyi dari Kegiatan", "Kabur Ketika Mobilisasi", "Mokel", "Tidak Datang Panggilan Bagian Lebih dari 3 hari", "Melanggar Norma Susila",
		"Mencuri", "Berkelahi", "Kabur Dari Pondok", "Berhubungan Dengan Orang Kampung", "Membully", "Melawan Pembantu Pimpinan Pondok", "Terlambat Ke Masjid",
		"Menyeret Sandal"],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor()],
			data: 
			[<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Ghosob'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Tidak Pakai Sendal'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Menjemur Pakaian Di Kamar'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Tidak Mengunci Lemari'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Tidak Memakai Perlengkapan lengkap'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Terlambat'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Tidak Memakai Papan Nama'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Sembunyi dari Kegiatan'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Kabur Ketika Mobilisasi'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Mokel'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Tidak Datang Panggilan Bagian Lebih dari 3 hari'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Melanggar Norma Susila'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Mencuri'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Berkelahi'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Kabur Dari Pondok'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Berhubungan Dengan Orang Kampung'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Membully'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Melawan Pembantu Pimpinan Pondok'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Terlambat Ke Masjid'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_pelanggaran = 'Menyeret Sandal'")->num_rows(); ?> ,
			],
			}  
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Pelanggaran Santri Pondok Modern Darussalam Gontor Kampus 2 Minggu Ini'
		},
		scales: {
            yAxes: [{
                ticks: {
					stepSize: 1,
					beginAtZero: true
				}
            }]
        }
		}
	});

</script>

<!-- ////////////////////////////////////////////////////////////////////////GRAFIK PERIZINAN MINGGUAN/////////////////////////////////////////////////////////////////////////////////// -->

<script>

	// Bar Chart Example
	new Chart(document.getElementById("grafikperizinan"), {
		type: 'bar',
		data: {
		labels: [ "Perizinan Pulang Sementara", "Perizinan Sakit"],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor()],
			data: 
			[<?php echo $this->db->query("SELECT * FROM record_perizinan_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_perizinan = 'Perizinan Pulang Sementara'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_perizinan_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING nama_perizinan = 'Perizinan Sakit'")->num_rows(); ?> ,
			
			],
			}  
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Perizinan Santri Pondok Modern Darussalam Gontor Kampus 2 Minggu Ini'
		},
		scales: {
            yAxes: [{
                ticks: {
					stepSize: 1,
					beginAtZero: true
				}
            }]
        }
		}
	});

</script>

<!-- ///////////////////////////////////////////////////////////////////////////////GRAFIK PENGHUKUM//////////////////////////////////////////////////////////////////////////////////////// -->

<script>
	
	// Bar Chart Example
	new Chart(document.getElementById("grafikpenghukum"), {
		type: 'bar',
		data: {
		labels: ["Al-Akh Sulthon Zidan Heydar Ahkam","Al-Akh Muhammad Yazid Abbad Yahya",
		"Al-Akh Judistira Haidar Sabar Pratama","Al-Akh Muhammad Iqbal","Al-Akh Auzan Aditya Faturrochman",
		"Al-Akh Muhammad Farhan Faza","Al-Akh Brian Surya Wicaksana","Al-Akh Farrel Xavier Al-Kautsar",
		"Al-Akh Nunfahmi Fachrurozi Amin","Al-Akh Khoirun Mansun","Al-Akh Pramuditya Galih Aryanta Putra",
		"Al-Akh Arjuna Sastro Aji Harahap","Al-Akh M. Fahrurrozi","Al-Akh Ammar Bin Mohammad Nasir"],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), 
			],
			data: 
			[<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '12'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '13'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '14'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '15'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '16'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '17'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '18'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '19'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '20'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '21'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '22'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '23'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '24'")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM record_pelanggaran_pengasuhan WHERE create_at BETWEEN '$date7ago' AND '$date1' HAVING id_penghukum = '25'")->num_rows(); ?> ,
			],
			}
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Anggota Yang Dihukum Oleh Keamanan'
		},
		scales: {
            yAxes: [{
                ticks: {
					stepSize: 1,
					beginAtZero: true
				}
            }]
        }
		}
	});

</script>