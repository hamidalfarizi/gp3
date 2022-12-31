<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><strong>Update Data Santri Massal</strong></h1>
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

	<!-- DataTales Example -->
	<div class="card shadow mb-6">
		<div class="card-header py-3">
			<div class="row">
				<div class="col">
					<button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#formUploadKelas">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload Kelas Santri</span>
					</button>
					<button class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#formUploadRayon">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload Rayon Santri</span>
					</button>
					<button class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#formUploadNisn">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload NISN Santri</span>
					</button>
					<button class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#formUploadNisn">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload ID Santri</span>
					</button>
					<button class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#formUploadNotelp">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload Notelp Santri</span>
					</button>
				</div>
			</div>
		</div>
		
	</div>

	<!-- content row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="formUploadKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data Kelas Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="update_massal/upload_kelas" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('update_massal/download_template_update_kelas'); ?>" class='btn btn-info btn-sm'>Download</a>
					Template update kelas siswa
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formUploadRayon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data Rayon Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="update_massal/upload_rayon" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('update_massal/download_template_update_rayon'); ?>" class='btn btn-info btn-sm'>Download</a>
					Template update rayon siswa
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formUploadNisn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data NISN Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="update_massal/upload_nisn" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('update_massal/download_template_update_nisn'); ?>" class='btn btn-info btn-sm'>Download</a>
					Template update NISN siswa
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formUploadNisn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data NISN Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="update_massal/upload_idsiswa" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('update_massal/download_template_update_idsiswa'); ?>" class='btn btn-info btn-sm'>Download</a>
					Template update ID siswa
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formUploadNotelp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data No Telp Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="update_massal/upload_notelp_siswa" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('update_massal/download_template_update_idsiswa'); ?>" class='btn btn-info btn-sm'>Download</a>
					Template update ID siswa
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

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