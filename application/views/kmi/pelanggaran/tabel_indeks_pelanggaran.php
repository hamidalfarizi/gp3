<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><strong>Tabel Indeks Pelanggaran Santri</strong></h1>
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

	<div class="row mb-4">
		<div class="col">
			<a href="<?= base_url('kmi/pelanggaran/filter'); ?>" class="btn btn-info btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-filter"></i>
				</span>
				<span class="text">Filter Perkategori</span>
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
							<th>No</th>
							<th>id</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Waktu</th>
							<th>Pelanggaran</th>
							<th>Kategori</th>
							<th>Poin</th>
							<th>Penghukum</th>
							<th>Keterangan</th>
							<th>Action</th>
						</tr>
					</thead>

					<?php $no=1; foreach ($pelanggaran_siswa as $m) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $m['id_siswa']; ?></td>
							<td><?php echo $m['nama_lengkap']; ?></td>
							<td><?php echo $m['kelas']; ?></td>
							<td><?php echo format_tanggal ($m['create_at']); ?></td>
							<td><?php echo $m['nama_pelanggaran']; ?></td>
							<td><?php echo $m['kategori_pelanggaran']; ?></td>
							<td><?php echo $m['poin_pelanggaran']; ?></td>
							<td><?php echo $m['nama']; ?></td>
							<td><?php echo $m['keterangan']; ?></td>
							<td>
								<a href="<?php echo site_url('kmi/pelanggaran/hapus_pelanggaran_tabel/' . $m['id_pelanggaran'] ); ?>" class="btn btn-danger btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>
								</a>
								<a href="<?php echo site_url('kmi/pelanggaran/edit_pelanggaran_tabel/' . $m['id_pelanggaran'] ); ?>" class="btn btn-primary btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-pen"></i>
									</span>
								</a>
							</td>
						</tr>
					<?php } ?>
					<tfoot>
						<tr>
							<th>No</th>
							<th>id</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Waktu</th>
							<th>Pelanggaran</th>
							<th>Kategori</th>
							<th>Poin</th>
							<th>Penghukum</th>
							<th>Keterangan</th>
							<th>Action</th>
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