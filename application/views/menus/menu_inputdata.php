
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
	<a class="nav-link" href="<?= base_url('dashboard'); ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Menu Administrator
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('profil'); ?>">
		<i class="fas fa-school"></i>
		<span>Profil Pondok</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('tahun_pelajaran'); ?>">
		<i class="fas fa-calendar"></i>
		<span>Tahun Pelajaran</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading bg-dark p-2">
	<div class="font-weight-bold text-white">BIODATA SANTRI</div> 
</div>

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
			<a class="collapse-item" href="<?= base_url(); ?>">Diagram Statistik</a>
			<a class="collapse-item" href="<?= base_url(); ?>">Input Santri Non-Aktif</a>
			<a class="collapse-item" href="<?= base_url(); ?>">Rekap Santri Non-Aktif</a>
		</div>
	</div>
</li>

	
