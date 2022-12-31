
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?= base_url('dashboard'); ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>


<!-- Heading -->
<div class="sidebar-heading bg-dark p-2 mb-3">
	<div class="font-weight-bold text-white">MENU KMI</div> 
</div>

<!-- Heading -->
<div class="sidebar-heading">
	DATA INDIVIDU SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('kmi/siswa'); ?>">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Tabel Data Santri</span>
	</a>
</li>

<!-- Nav Item - Charts -->
<!-- <li class="nav-item">
	<a class="nav-link" href="<?= base_url('pengasuhan/siswa/grafik_mingguan'); ?>">
		<i class="fas fa-chart-bar"></i>
		<span>Grafik Mingguan</span>
	</a>
</li> -->

<!-- Nav Item - Charts -->
<!-- <li class="nav-item">
	<a class="nav-link" href="<?= base_url('kmi/pelanggaran/tambah_kategori_pelanggaran'); ?>">
		<i class="fas fa-balance-scale"></i>
		<span>Data Kategori Pelanggaran</span>
	</a>
</li> -->

<!-- Heading -->
<div class="sidebar-heading">
	DATA AKSES SANTRI
</div>
<!-- Divider -->
<hr class="sidebar-divider mb-1">
	
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengasuhan" aria-expanded="true"
		aria-controls="pengasuhan">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Pelanggaran</span>
	</a>
	<div id="pengasuhan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran'); ?>">Input Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran/tabel_pelanggaran'); ?>">Tabel Indeks Pelanggaran</a>
			<a class="collapse-item" href="<?= base_url('kmi/pelanggaran/form_filter_tanggal'); ?>">Grafik Pelanggaran Santri</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#perizinan" aria-expanded="true"
		aria-controls="perizinan">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Perizinan</span>
	</a>
	<div id="perizinan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
			<!-- <a class="collapse-item" href="<?= base_url('catatan'); ?>">Catatan</a>
			<a class="collapse-item" href="<?= base_url('penilaian'); ?>">Penilaian</a>
			<a class="collapse-item" href="<?= base_url('nilai_sikap'); ?>">Nilai Sikap</a>
			<a class="collapse-item" href="<?= base_url('kompetensi_dasar'); ?>">Komptensi</a> -->
			<a class="collapse-item" href="<?= base_url('jadwal_pelajaran'); ?>">Jadwal Pelajaran</a>
		</div>
	</div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('rekap_kelas'); ?>">
		<i class="fas fa-chart-bar"></i>
		<span>Rekap Jumlah Siswa</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('tahun_pelajaran'); ?>">
		<i class="fas fa-calendar"></i>
		<span>Tahun Pelajaran</span></a>
</li>