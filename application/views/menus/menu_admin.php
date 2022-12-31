<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?= base_url('dashboard'); ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>


<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU INPUT DATA</div> 
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA PONDOK
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('profil'); ?>">
		<i class="fas fa-school"></i>
		<span>Profil Pondok</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('rekap_kelas'); ?>">
		<i class="fas fa-chart-bar"></i>
		<span>Rekap Jumlah Siswa</span></a>
</li>

<!-- Heading -->
<div class="sidebar-heading">
	BIODATA SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
		aria-controls="collapseOne">
		<i class="far fa-address-card"></i>
		<span>Santri Aktif</span>
	</a>
	<div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('siswa'); ?>">Daftar Santri Aktif</a>
			<a class="collapse-item" href="<?= base_url('siswa/add'); ?>">Input Biodata Lengkap</a>
			<a class="collapse-item" href="<?php echo base_url('filter_siswa/'); ?>">Filter Data Perkategori</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
		aria-controls="collapseTwo">
		<i class="far fa-address-card"></i>
		<span>Santri Non-Aktif</span>
	</a>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('siswa_nonaktif'); ?>">Daftar Santri Non-Aktif</a>
			<!-- <a class="collapse-item" href="<?= base_url(); ?>">Diagram Statistik</a>
			<a class="collapse-item" href="<?= base_url(); ?>">Input Santri Non-Aktif</a>
			<a class="collapse-item" href="<?= base_url(); ?>">Rekap Santri Non-Aktif</a> -->
		</div>
	</div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('update_massal'); ?>">
		<i class="fas fa-upload"></i>
		<span>Update Massal</span></a>
</li>


<!-- Heading -->
<div class="sidebar-heading">
	BIODATA GURU
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
		aria-controls="collapseThree">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Data Guru</span>
	</a>
	<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('walikelas'); ?>">Walikelas</a>
			<a class="collapse-item" href="<?= base_url('guru'); ?>">Guru</a>
			<a class="collapse-item" href="<?= base_url('pengajar'); ?>">Pengajar</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
		aria-controls="collapseFour">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Data Alumni Guru</span>
	</a>
	<div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url(''); ?>">Data Alumni Guru</a>
			<a class="collapse-item" href="<?= base_url(''); ?>">Tabel Alumni Guru</a>
		</div>
	</div>
</li>

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU PENGASUHAN SANTRI</div> 
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('pengasuhan/siswa/grafik_mingguan'); ?>">
		<i class="fas fa-chart-bar"></i>
		<span>Grafik Mingguan</span></a>
</li>

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKSES SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">
	
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengasuhan" aria-expanded="true"
		aria-controls="pengasuhanpelanggaran">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Pelanggaran</span>
	</a>
	<div id="pengasuhan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/tabel_rekap_point'); ?>">Tabel Rekap Poin</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/tambah_kategori_pelanggaran'); ?>">Tabel Jenis Pelanggaran</a>

			<!-- <a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a> -->
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#perizinan" aria-expanded="true"
		aria-controls="pengasuhanperizinan">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Perizinan</span>
	</a>
	<div id="perizinan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('pengasuhan/perizinan'); ?>">Input Perizinan</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/perizinan/tabel_perizinan'); ?>">Tabel Indeks Perizinan</a>
			<a class="collapse-item" href="<?= base_url('pengasuhan/perizinan/form_filter_tanggal'); ?>">Grafik Perizinan Santri</a>
		</div>
	</div>
</li>


<!-- Heading -->
<div class="sidebar-heading">
	DATA INDIVIDU SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('pengasuhan/siswa'); ?>">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Tabel Data Santri</span>
	</a>
</li>

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU STAF KMI</div>
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKSES SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kmi1" aria-expanded="true"
		aria-controls="kmi1">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Pelanggaran</span>
	</a>
	<div id="kmi1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kmi2" aria-expanded="true"
		aria-controls="kmi2">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Perizinan</span>
	</a>
	<div id="kmi2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('kmi/perizinan'); ?>">Input Perizinan</a>
			<a class="collapse-item" href="<?= base_url('kmi/perizinan/tabel_perizinan'); ?>">Tabel Indeks Perizinan</a>
			<a class="collapse-item" href="<?= base_url('kmi/perizinan/form_filter_tanggal'); ?>">Grafik Perizinan Santri</a>
		</div>
	</div>
</li>

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKADEMIK
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseA" aria-expanded="true"
		aria-controls="collapseA">
		<i class="fas fa-book"></i>
		<span>Data Akademik</span>
	</a>
	<div id="collapseA" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('kelas'); ?>">Kelas</a>
			<a class="collapse-item" href="<?= base_url('rombel'); ?>">Rombel</a>
			<a class="collapse-item" href="<?= base_url('mapel'); ?>">Mata Pelajaran</a>
			<a class="collapse-item" href="<?= base_url('catatan'); ?>">Catatan</a>
			<a class="collapse-item" href="<?= base_url('penilaian'); ?>">Penilaian</a>
			<a class="collapse-item" href="<?= base_url('nilai_sikap'); ?>">Nilai Sikap</a>
			<a class="collapse-item" href="<?= base_url('kompetensi_dasar'); ?>">Komptensi</a>
			<a class="collapse-item" href="<?= base_url('jadwal_pelajaran'); ?>">Jadwal Pelajaran</a>
		</div>
	</div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('tahun_pelajaran'); ?>">
		<i class="fas fa-calendar"></i>
		<span>Tahun Pelajaran</span></a>
</li>

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU BAGIAN KESEHATAN</div>
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA RIWAYAT SAKIT SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#riwayatsakit" aria-expanded="true"
		aria-controls="riwayatsakit">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Riwayat Sakit</span>
	</a>
	<div id="riwayatsakit" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('bakes/riwayatsakit'); ?>">Input Riwayat Sakit Santri</a>
			<a class="collapse-item" href="<?= base_url('bakes/riwayatsakit/tabel_riwayatsakit'); ?>">Tabel Indeks Riwayat Sakit</a>
			<a class="collapse-item" href="<?= base_url('bakes/riwayatsakit/form_filter_tanggal'); ?>">Grafik Penyakit Santri</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bakesperizinan" aria-expanded="true"
		aria-controls="bakesperizinan">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Perizinan Berobat</span>
	</a>
	<div id="bakesperizinan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('bakes/perizinan'); ?>">Input Perizinan</a>
			<a class="collapse-item" href="<?= base_url('bakes/perizinan/tabel_perizinan'); ?>">Tabel Indeks Perizinan</a>
			<a class="collapse-item" href="<?= base_url('bakes/perizinan/form_filter_tanggal'); ?>">Grafik Perizinan Santri</a>
		</div>
	</div>
</li>

<!-- Heading -->
<!-- <div class="sidebar-heading bg-dark p-2">
	<div class="font-weight-bold text-white">DATA PERIZINAN SANTRI</div> 
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAA" aria-expanded="true"
		aria-controls="collapseAA" >
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Santri Keluar Pondok</span>
	</a>
	<div id="collapseAA" class="collapse navbar-collapse" href="#" data-toggle="collapse" data-target="#collapseAB" aria-expanded="true"
		aria-controls="collapseAB">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAB" aria-expanded="true"
			aria-controls="collapseAB"> 
			<i class="fas fa-book"></i>
			<span>Di Rumah Sakit</span>
		</a>
		<div id="collapseAB" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url(''); ?>">Data Alumni Guru</a>
				<a class="collapse-item" href="<?= base_url(''); ?>">Tabel Alumni Guru</a>
			</div>
		</div>
	</div>
	<div id="collapseAA" class="collapse navbar-collapse" href="#" data-toggle="collapse" data-target="#collapseAC" aria-expanded="true"
		aria-controls="collapseAC">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAC" aria-expanded="true"
			aria-controls="collapseAC"> 
			<i class="fas fa-book"></i>
			<span>Pulang Sementara</span>
		</a>
		<div id="collapseAC" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url(''); ?>">Data Alumni Guru</a>
				<a class="collapse-item" href="<?= base_url(''); ?>">Tabel Alumni Guru</a>
			</div>
		</div>
	</div>
</li> -->

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU BAGIAN BAHASA</div>
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKSES SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bahasa" aria-expanded="true"
		aria-controls="bahasapelanggaran">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Pelanggaran</span>
	</a>
	<div id="bahasa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('bahasa/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('bahasa/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('bahasa/pelanggaran/tabel_rekap_point'); ?>">Tabel Rekap Poin</a>
			<a class="collapse-item" href="<?= base_url('bahasa/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a>
			<a class="collapse-item" href="<?= base_url('bahasa/pelanggaran/tambah_kategori_pelanggaran'); ?>">Tabel Jenis Pelanggaran</a>
		</div>
	</div>
</li>


<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU BAGIAN PUSDAC</div>
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKSES SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pusdac" aria-expanded="true"
		aria-controls="pusdacpelanggaran">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Pelanggaran</span>
	</a>
	<div id="pusdac" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('pusdac/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pusdac/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('pusdac/pelanggaran/tabel_rekap_point'); ?>">Tabel Rekap Poin</a>
			<a class="collapse-item" href="<?= base_url('pusdac/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a>
			<a class="collapse-item" href="<?= base_url('pusdac/pelanggaran/tambah_kategori_pelanggaran'); ?>">Tabel Jenis Pelanggaran</a>
		</div>
	</div>
</li>

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2">
	<div class="font-weight-bold text-white">Menu Administrator</div> 
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('users'); ?>">
		<i class="fas fa-users-cog"></i>
		<span>Data Pengguna</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('pengasuhan/pelanggaran/tambah_kategori_pelanggaran'); ?>">
		<i class="fas fa-balance-scale"></i>
		<span>Data Kategori Pelanggaran</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('rapor/template_rapor'); ?>">
		<i class="fas fa-users-cog"></i>
		<span>Template Rapor</span></a>
</li>