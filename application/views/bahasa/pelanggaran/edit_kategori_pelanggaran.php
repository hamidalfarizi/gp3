<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><strong>Edit Jenis Pelanggaran Bahasa</strong></h1>
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

	<div class="card shadow mb-1">
		<div class="card-header" >
			<h4 class="h4 mb-0 text-gray-800"><strong>Edit Jenis Pelanggaran</strong></h4>
		</div>
		<div class="card-body">
			<form action="<?= base_url('bahasa/pelanggaran/edit_kategori_pelanggaran/' . $kategori_pelanggaran['id']) ?>" method="post">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Kategori</th>
						<td>
							<div class="form-group">
								<select name="kategori" class="form-control" id="kategori">
								<option value="<?php echo $kategori_pelanggaran['kategori'] ?>"><?php echo $kategori_pelanggaran['kategori'] ?></option>
									<option value="Ringan">Ringan</option>
									<option value="Sedang">Sedang</option>
									<option value="Berat">Berat</option>
								</select>
							</div>
						</td>	
					</tr>
					<tr>
						<th>Nama Pelanggaran</th>
						<td>
							<div class="form-group">
								<input type="text" name="nama_pelanggaran" class="form-control" id="nama_pelanggaran" value="<?php echo $kategori_pelanggaran['nama_pelanggaran'] ?>">
							</div>
						</td>	
					</tr>
					<tr>
						<th>Poin Pelanggaran</th>
						<td>
							<div class="form-group">
								<input type="number" name="poin_pelanggaran" class="form-control" id="nama_pelanggaran" value="<?php echo $kategori_pelanggaran['poin'] ?>" >
							</div>
						</td>	
					</tr>
				</Table>
				<button type="submit" class='btn btn-primary'>Edit Pelanggaran</button>
				<a href="<?= base_url('bahasa/pelanggaran/tambah_kategori_pelanggaran'); ?>" class='btn btn-danger'>Kembali</a>
			</form>
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