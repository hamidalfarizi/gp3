<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?= base_url('dashboard'); ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
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
			<a class="collapse-item" href="<?= base_url('bakes/riwayatsakit/form_filter_tanggal'); ?>">Grafik Riwayat Sakit Santri</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
	<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bakesperizinan" aria-expanded="true"
		aria-controls="bakesperizinan">
		<i class="fas fa-chalkboard-teacher"></i>
		<span>Daftar Tinggal</span>
	</a>
	<div id="bakesperizinan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<a class="collapse-item" href="<?= base_url('bakes/daftartinggal/tabel_emergency1'); ?>">Emergency 1</a>
			<a class="collapse-item" href="<?= base_url('bakes/daftartinggal/tabel_emergency2'); ?>">Emergency 2</a>
			<a class="collapse-item" href="<?= base_url('bakes/daftartinggal/tabel_rumahsakit'); ?>">Rumah Sakit</a>
		</div>
	</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
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
</li> -->