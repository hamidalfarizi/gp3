<div class="container-fluid">

<title> Print Data Riwayat Sakit <?php echo $detail->nama_lengkap ?> Kelas <?php echo $detail->kelas ?> </title>

<br><br>
	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h2 mb-0 text-gray-800"><strong> Rekap Data Riwayat Sakit Santri</strong> </h1>
	</div>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h2 class="h3 mb-0 text-gray-800"><?php echo $detail->nama_lengkap ?> Kelas <?php echo $detail->kelas ?></h2>
	</div>
	
<br>

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
	<?php if ($this->session->flashdata('berhasil')) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('berhasil'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- Content Row -->
	<div class="row">

		<div class="col-2">
			<!-- Basic Card Example -->
			<div class="card shadow mb-4 position-relative" >
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary d-flex justify-content-center">Foto Personal Santri</h6>
				</div>
				<div class="card-body">
					<img class='img-thumbnail shadow-sm' src="<?php echo base_url() ?>assets/img/fotoakses/<?php echo $detail->nis ?>.jpg" alt="foto_personal" style="width: 100%;"/>
				</div>
			</div>
		</div>

		<div class="col-10">
			<!-- Basic Card Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Biodata Santri</h6>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped">
						<tr>
							<th style="width: 12rem;">Status</th>
							<td><?php echo ($detail->aktif == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
						</tr>
						<tr>
							<th>Stambuk</th>
							<td><?php echo $detail->nis ?></td>
						</tr>
						<tr>
							<th>Nama Lengkap</th>
							<td><?php echo $detail->nama_lengkap ?></td>
						</tr>
						<tr>
							<th>Nama Panggilan</th>
							<td><?php echo $detail->nama_panggilan ?></td>
						</tr>
						<tr>
							<th>Kelas</th>
							<td><?php echo $detail->kelas ?></td>
						</tr>
						<tr>
							<th>Rayon</th>
							<td><?php echo $detail->rayon ?></td>
						</tr>
						<tr>
							<th>Konsulat</th>
							<td><?php echo $detail->konsul ?></td>
						</tr>
						<tr>
							<th>Nama Ayah</th>
							<td><?php echo $detail->ayah ?></td>
						</tr>
					</Table>
				</div>
			</div>
		</div>

		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-body">
					<div class="table-responsive">
						<table id="datatable-guru" class="table table-striped table-bordered " style="width:100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tanggal Sakit</th>
									<th>Jenis Penyakit</th>
									<th>Kategori Penyakit</th>
									<th>Penginput</th>
									<th>Tindakan</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php $no=1; foreach ($datafilter as $row): ?>
									<td><?php echo $no++; ?></td>
									<td><?php echo $row->nama_lengkap; ?></td>
									<td><?php echo format_tanggal ($row->create_at); ?></td>
									<td><?php echo $row->jenis_penyakit; ?></td>
									<td><?php echo $row->kategori_penyakit; ?></td>
									<td><?php echo $row->nama_penginput; ?></td>
									<td><?php echo $row->tindakan; ?></td>
									<td><?php echo ($row->status_sakit == 1 ? '<span class="badge badge-danger">Masih Dirawat</span>' : '<span class="badge badge-primary">Sudah Sembuh</span>'); ?></td>
									<td><?php echo $row->keterangan; ?></td>
									<td>
									<a href="<?php echo site_url('bakes/riwayatsakit/hapus_riwayatsakit/' . $row->id_sakit ); ?>" class="btn btn-danger btn-sm">
										<span class="icon text-white-50">
											<i class="fas fa-trash"></i>
										</span>
									</a>
									<a href="<?php echo site_url('bakes/riwayatsakit/edit_riwayatsakit/' . $row->id_sakit ); ?>" class="btn btn-primary btn-sm">
										<span class="icon text-white-50">
											<i class="fas fa-pen"></i>
										</span>
									</a>
									</td>
								</tr>
									<?php endforeach ?>
							</tbody>     
						</table>
					</div>
				</div>
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


<script>
	window.onload = function () {
		window.print();
	};
</script>


<!-- Custom fonts for this template-->
<link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css">
<!-- Custom styles for this template-->
<link href="<?php echo base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
<!-- jquery -->
<script src="<?= base_url('assets/vendor/jquery/jquery.js'); ?>"></script>

<!-- sweetalert2 -->
<script src="<?= base_url('node_modules/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>