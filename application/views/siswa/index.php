<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Daftar Santri Aktif</h1>
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
					<a href="<?= base_url('siswa/add'); ?>" class="btn btn-info btn-icon-split">
						<span class="icon text-white-50">
							<i class="fas fa-user-plus"></i>
						</span>
						<span class="text">Tambah Santri</span>
					</a>
					<a href="<?= base_url('siswa/download'); ?>" class="btn btn-success btn-icon-split">
						<span class="icon text-white-50">
							<i class="fas fa-download"></i>
						</span>
						<span class="text">Download</span>
					</a>
					<button class="btn btn-warning btn-icon-split" data-toggle="modal" data-target="#formUpload">
						<span class="icon text-white-50">
							<i class="fas fa-upload"></i>
						</span>
						<span class="text">Upload Santri</span>
					</button>
					<!-- <button class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#deleteAll">
						<span class="icon text-white-50">
							<i class="fas fa-trash"></i>
						</span>
						<span class="text">Hapus Semua Santri</span>
					</button> -->
					<a href="<?= base_url('siswa/get_alamat'); ?>" class="btn btn-dark btn-icon-split" target="_blank">
						<span class="icon text-white-50">
							<i class="fas fa-home"></i>
						</span>
						<span class="text">Data Alamat Santri</span>
					</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
					<thead class="thead-dark">
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
								<a href="<?php echo site_url('siswa/detail/' . $m['id']); ?>" class="btn btn-info btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-search-plus"></i>
									</span>
								</a>
								<a href="<?php echo site_url('siswa/edit/' . $m['nis']); ?>" class="btn btn-primary btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-edit"></i>
									</span>
								</a>
								<a href="<?php echo site_url('siswa/remove/' . $m['id']); ?>" class="btn btn-danger btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
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

<!-- Modal -->
<div class="modal fade" id="formUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Upload Data siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="siswa/do_upload" enctype="multipart/form-data">
				<div class="modal-body">
					<input type="file" name="userfile" size="20">
					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">
					<a href="<?= base_url('siswa/download_template_siswa'); ?>" class='btn btn-info btn-sm'>Download</a>
					template data siswa
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
<div class="modal fade" id="deleteAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Hapus siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Hati-hati ketika melakukan hal ini!
				<br>
				Anda yakin untuk menghapus <b class="text-danger">Semua data siswa</b>?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a class="btn btn-danger" href='<?= base_url('siswa/delete_all_siswa'); ?>'>Hapus Semua</a>
			</div>
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