<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Daftar Detail Perizinan <?php echo $detail->nama_lengkap ?></td> </h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<?php foreach ($datafilter as $row): ?>
			<form action="<?= base_url('bahasa/perizinan/print/' . $row->id_siswa)  ?>" method="post" target='_blank'>
					<input type="hidden" name="id_siswa" value="<?php echo $detail->id ?>">
					<?php endforeach ?>	
					<input type="hidden" name="print" value="1">
					<button type="submit" class='btn btn-primary btn-sm'>
						<span class="icon text-white-50">
							<i class="fas fa-print"></i>
						</span>
						<span class="text">Export PDF</span>
					</button>
			</Form>	
		</a>
	</div>

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
				<div class="card-footer text-center">
                	<a class="btn btn-circle btn-success" href="<?php echo $detail->id-1 ?>"> <i class="fas fa-long-arrow-alt-left" ></i></a>
                	<a class="btn btn-circle btn-success" href="<?php echo $detail->id+1 ?>"> <i class="fas fa-long-arrow-alt-right" ></i></a>
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
									<th>Tanggal Izin</th>
									<th>Nama Perizinan</th>
									<th>Kategori</th>
									<th>Pengizin</th>
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
									<td><?php echo $row->nama_perizinan; ?></td>
									<td><?php echo $row->kategori; ?></td>
									<td><?php echo $row->nama; ?></td>
									<td><?php echo $row->keterangan; ?></td>
									<td>
										<a href="<?php echo site_url('bahasa/perizinan/hapus_perizinan/' . $row->id_perizinan ); ?>" class="btn btn-danger btn-sm">
											<span class="icon text-white-50">
												<i class="fas fa-trash"></i>
											</span>
										</a>
										<a href="<?php echo site_url('bahasa/perizinan/edit_perizinan/' . $row->id_perizinan ); ?>" class="btn btn-primary btn-sm">
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

	<!-- <div class="row">
		
	</div>
	 -->
	<div>
		<div class="col-sm-offset-4 col-sm-8">
			<a href="<?= base_url('bahasa/perizinan'); ?>" class='btn btn-danger'>Kembali</a>
		
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