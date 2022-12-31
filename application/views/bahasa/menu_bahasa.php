<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?= base_url('dashboard'); ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>


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

