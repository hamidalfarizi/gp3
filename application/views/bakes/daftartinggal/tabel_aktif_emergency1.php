<!-- Begin Page Content -->
<div class="container-fluid text-dark">

	<!-- page heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><strong>Tabel Indeks Emergency 1</strong></h1>
		<h3 class="h5 mb-0 text-gray-800"><em>Santri yang sedang berada di Emergency 1</em></h3>
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

	<!-- <div class="row mb-4">
		<div class="col">
			<a href="<?= base_url('bakes/riwayatsakit/filter'); ?>" class="btn btn-info btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-filter"></i>
				</span>
				<span class="text">Filter Perkategori</span>
			</a>
		</div>
	</div> -->

	<!-- DataTales Example -->
	<div class="card shadow mb-6">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-dark table-bordered table-hover" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>Stambuk</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Waktu Input</th>
							<th>Jenis Penyakit</th>
							<th>Kategori Penyakit</th>
							<th>Penginput</th>
							<th>Tindakan</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>Action</th>
						</tr>
					</thead>

					<?php $no=1; foreach ($santri_sakit as $m) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $m['nis']; ?></td>
							<td><?php echo $m['nama_lengkap']; ?></td>
							<td><?php echo $m['kelas']; ?></td>
							<td><?php echo format_tanggal ($m['create_at']); ?></td>
							<td><?php echo $m['jenis_penyakit']; ?></td>
							<td><?php echo $m['kategori_penyakit']; ?></td>
							<td><?php echo $m['nama_penginput']; ?></td>
							<td><?php echo $m['tindakan']; ?></td>
							<td><?php echo ($m['status'] == 1 ? '<span class="badge badge-danger">Masih Dirawat</span>' : '<span class="badge badge-primary">Sudah Sembuh</span>'); ?></td>
							<td><?php echo $m['keterangan']; ?></td>
							<td>
								<a href="<?php echo site_url('bakes/riwayatsakit/hapus_riwayatsakit_tabel/' . $m['id_sakit'] ); ?>" class="btn btn-danger btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-trash"></i>
									</span>
								</a>
								<a href="<?php echo site_url('bakes/riwayatsakit/edit_riwayatsakit_tabel/' . $m['id_sakit'] ); ?>" class="btn btn-primary btn-sm">
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
							<th>Stambuk</th>
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Waktu Input</th>
							<th>Jenis Penyakit</th>
							<th>Kategori Penyakit</th>
							<th>Penginput</th>
							<th>Tindakan</th>
							<th>Status</th>
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

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
    	"pageLength": 50,
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
        ],
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>