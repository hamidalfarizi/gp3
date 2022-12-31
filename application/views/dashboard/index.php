<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- flash data -->
	<?php if ($this->session->flashdata('message')) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('message'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h4 mb-0 text-gray-800 font-weight-bold" >Dashboard</h1>
	</div>

	<!-- title -->
	<div class="row mb-4">
		<div class='col-12'>
			<!-- cek datanya jika kosong -->
			<?php if ($num_rows == 0) : ?>
				<div class="alert alert-danger" role="alert">
					<p>Anda belum memasukan profil sekolah.</p><a href='<?= base_url('profil/add'); ?>' class='btn btn-primary'>Profil Sekolah</a>
				</div>
			<?php endif; ?>

			<!-- cek data tahun pelajaran -->
			<?php if ($tahun_pelajaran == null) : ?>
				<div class="alert alert-danger" role="alert">
					<p>Anda belum memasukan data Tahun Pelajaran.</p><a href='<?= base_url('tahun_pelajaran'); ?>' class='btn btn-primary'>Tahun Pelajaran</a>
				</div>
			<?php endif; ?>
			<?php foreach ($profil as $p) { ?>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<img class='img-thumbnail shadow-sm' src="<?= base_url('assets/img/' . $p['logo']) ?>"/>
							</div>
							<div class="col-md-10">
								<ul class="list-unstyled">
									<li>
										<h3 class="text-dark"><strong>Sistem Informasi Data Santri</strong></h3>
									</li>
									<li>
										<h4 class="text-uppercase"><?= $p['namaSekolah'] ?></h4>
									</li>
									<li>Alamat: <?= $p['alamat'] ?></li>
									<li>Telp: <?= $p['telp'] ?></li>
									<li>Email: <?= $p['email'] ?></li>
									<li>Website: <?= $p['website'] ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- card jumlah siswa -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Santri</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_siswa; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- card jumlah guru -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Guru</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">223</div>
							<!-- <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_guru; ?></div> -->
						</div>
						<div class="col-auto">
							<i class="fas fa-chalkboard-teacher fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- card jumlah kelas dan rombel -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kelas
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_kelas; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-dark shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Rayon
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">13</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Konsulat
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">29</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Santri non-aktif
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_siswa_nonaktif; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-book fa-2x"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="card">
		<div class="card-body">
			<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">JUMLAH SANTRI PER-RAYON</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">JUMLAH SANTRI PER-KELAS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">JUMLAH SANTRI PER-KONSULAT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-keamanan-tab" data-toggle="pill" href="#pills-keamanan" role="tab" aria-controls="pills-keamanan" aria-selected="false">JUMLAH GURU PER-KAMAR</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								JUMLAH SANTRI PER-RAYON
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikrayon"></canvas>
								<button class='btn btn-primary' onclick="download_grafikrayon()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								JUMLAH SANTRI PER-KELAS
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikkelas"></canvas>
								<button class='btn btn-primary' onclick="download_grafikkelas()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					<div class='col-12'>
						<div class="card body">
							<div class="card-header text-uppercase">
								JUMLAH SANTRI PER-KONSULAT
							</div>
							<div class="card-body">
									<!-- CHART -->
								<canvas id="grafikkonsulat"></canvas>
								<button class='btn btn-primary' onclick="download_grafikkonsulat()">Download</button>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-keamanan" role="tabpanel" aria-labelledby="pills-keamanan-tab">COMING SOON</div>
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

	function download_grafikrayon (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafikrayon');
		imageLink.download = 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Rayon';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	function download_grafikkelas (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafikkelas');
		imageLink.download = 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Kelas';
		imageLink.href = canvas.toDataURL('image/jpg', 1);
		imageLink.click();
	};

	function download_grafikkonsulat (){
		const imageLink = document.createElement('a');
		const canvas = document.getElementById('grafikkonsulat');
		imageLink.download = 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Konsulat';
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
		labels: ["Al Azhar Lt. 1", "Al Azhar Lt. 2", "Santiniketan", "Aligarh", "Syanggit Lt. 1", "Syanggit Lt. 2", "Palestina", "Makkah", "Tunisia Lt. 1", "Tunisia Lt. 2", "Sudan", "Syiria Lt. 1", "Syiria Lt. 2",],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor()],
			data: 
			[<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Al Azhar Lt. 1' AND (aktif) = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Al Azhar Lt. 2' AND (aktif) = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Santiniketan' AND (aktif) = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Aligarh' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syanggit Lt. 1' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syanggit Lt. 2' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Palestina' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Makkah' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Tunisia Lt. 1' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Tunisia Lt. 2' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Sudan' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syiria Lt. 1' AND (aktif) = '1' ")->num_rows(); ?>,
			<?php echo $this->db->query("SELECT (rayon) FROM siswa WHERE (rayon) = 'Syiria Lt. 2' AND (aktif) = '1' ")->num_rows(); ?>],
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

<!-- ////////////////////////////////////////////////////////////////////////GRAFIK KELAS/////////////////////////////////////////////////////////////////////////////////// -->

<script>

	// Bar Chart Example
	new Chart(document.getElementById("grafikkelas"), {
		type: 'bar',
		data: {
		labels: ["1-B", "1-C", "1-D", "1 Int B",
		"2-B", "2-C", "2-D", "2-E", "2-F",
		"3-B", "3-C", "3-D", "3-E", "3-F", "3-G", "3-H", "3-I",
		"3 Int B", "3 Int C", "3 Int D", 
		"4-B", "4-C", "4-D", "4-E", "4-F",
		"5-B", "5-C", "5-D", "5-E", "5-F", "5-G", "5-H", "5-I", "5-J",
		"6-B", "6-C", "6-D", "6-E", "6-F", "6-G", "6-H", "6-I",
		],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(),
			getRandomColor(),getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),
			getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(), getRandomColor(),getRandomColor(), getRandomColor(),
			],
			data: 
			[<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '1-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '1-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '1-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '1 Int B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '2-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '2-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '2-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '2-E' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '2-F' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-E' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-F' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-G' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-H' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3-I' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3 Int B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3 Int C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '3 Int D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '4-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '4-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '4-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '4-E' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '4-F' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-E' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-F' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-G' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-H' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-I' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '5-J' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-B' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-C' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-D' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-E' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-F' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-G' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-H' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE kelas  = '6-I' AND aktif = '1' ")->num_rows(); ?> ,
			],
			}  
		]
		},
		options: {
		legend: { display: false },
		title: {
			display: true,
			text: 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Kelas'
		},
		scales: {
            yAxes: [{
                ticks: {
					stepSize: 5,
					beginAtZero: true
				}
            }]
        }
		}
	});

</script>

<!-- ////////////////////////////////////////////////////////////////////////////////GRAFIK KONSULAT///////////////////////////////////////////////////////////////////////////////////////// -->
<script>

	// Bar Chart Example
	new Chart(document.getElementById("grafikkonsulat"), {
		type: 'bar',
		data: {
		labels: ["Aceh, Padang, Sumatera Utara","Banten","BANUSTRA","Banyumas","Bekasi","Besuki","Bogor","Bojonegoro","Cirebon","Foreign",
		"Gresik","Jakarta","Jambi","Jombang","Kalimantan","Kediri","Magelang","Malang","Palembang, Lampung","Pekalongan",
		"Ponorogo, Madiun","Priangan","Riau","Semarang","SUMALIA","SURAMADU","Yogyakarta, Surakarta",],
		datasets: [
			{
			label: "Jumlah Santri",
			backgroundColor: [getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), 
			getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), getRandomColor(), ],
			data: 
			[<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Aceh, Padang, Sumatera Utara' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Banten' AND aktif = '1' ")->num_rows(); ?> ,
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'BANUSTRA' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Banyumas' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Bekasi' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Besuki' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Bogor' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Bojonegoro' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Cirebon' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Foreign' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Gresik' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Jakarta' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Jambi' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Jombang' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Kalimantan' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Kediri' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Magelang' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Malang' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Palembang, Lampung' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Pekalongan' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Ponorogo, Madiun' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Priangan' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Riau' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Semarang' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'SUMALIA' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'SURAMADU' AND aktif = '1' ")->num_rows(); ?> , 
			<?php echo $this->db->query("SELECT * FROM siswa WHERE konsul  = 'Yogyakarta, Surakarta' AND aktif = '1' ")->num_rows(); ?> , 
			
		],
			}
		]
		},
		options: {
			legend: { display: false },
			title: {
				display: true,
				text: 'Jumlah Santri Pondok Modern Darussalam Gontor Kampus 2 Per-Konsulat'
			},
			scales: {
				yAxes: [{
					ticks: {
						stepSize: 10,
						beginAtZero: true
					}
				}]
			}	
		}
	});

</script>