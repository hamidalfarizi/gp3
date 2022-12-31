<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><strong>Input Pelanggaran Staf Bahasa Santri</strong></h1>
	</div>



	<!-- flash data -->
	<?php if ($this->session->flashdata('berhasil')) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('berhasil'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- flash data -->
	<?php if ($this->session->flashdata('hapus')) { ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('hapus'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- flash data -->
	<?php if ($this->session->flashdata('berhasil_upload')) { ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('berhasil_upload'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

		<div class="row mb-4">
			<div class="col">
				<a href="<?= base_url('bahasa/pelanggaran/input_massal'); ?>" class="btn btn-info btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-user-plus"></i>
					</span>
					<span class="text">Input Massal</span>
				</a>
			</div>
		</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-6">
		<div class="card-body">
			<div class="table-responsive">
				<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
					<thead>
						<tr>
							<th>Aktif</th>
							<th>Stambuk</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Rayon</th>
							<th>Konsulat</th>
							<th>Actions</th>
						</tr>
					</thead>

					<?php foreach ($siswa as $m) { ?>
						<tr>
							<td><?php echo ($m['aktif'] == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
							<td><?php echo $m['nis']; ?></td>
							<td><?php echo $m['nama_lengkap']; ?></td>
							<td><?php echo $m['kelas']; ?></td>
							<td><?php echo $m['rayon']; ?></td>
							<td><?php echo $m['konsul']; ?></td>
							<td>
								<a href="<?php echo site_url('bahasa/pelanggaran/input_pelanggaran/' . $m['id']); ?>" class="btn btn-danger btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-pen"></i>
									</span>
								</a>
								<a href="<?php echo site_url('bahasa/pelanggaran/detail/' . $m['id']); ?>" class="btn btn-primary btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-search"></i>
									</span>
								</a>
							</td>
						</tr>
					<?php } ?>
					<tfoot>
						<tr>
							<th>Aktif</th>
							<th>Stambuk</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Rayon</th>
							<th>Konsulat</th>
							<th>Actions</th>
						</tr>
					</tfoot>
				</table>
			</div>	
		</div>
	</div>

	<!-- content row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>