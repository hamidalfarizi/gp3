<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Edit Pelanggaran Santri</h3>
				</div>
				<div class="card-body">
					<form action="<?= base_url('pelanggaran/edit_pelanggaran/' . $pelanggaran['id']) ?>" method="post">
					<table class="table table-bordered table-striped">
							<tr>
							<th style="width: 12rem;">Status</th>
							<td><?php echo ($s['aktif'] == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
						</tr>
						<tr>
							<th>Stambuk</th>
							<td><?php echo $detail->nis ?></td>
							<input type="hidden" name="id_siswa" value="<?= $detail->id ?>">
						</tr>
						<tr>
							<th>Nama Lengkap</th>
							<td><?php echo $detail->nama_lengkap ?></td>
							<input type="hidden" name="nama_lengkap" value="<?= $detail->nama_lengkap ?>">
						</tr>
						<tr>
							<th>Kelas</th>
							<td><?php echo $detail->kelas ?></td>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<td><?php echo $detail->tempat_lahir ?></td>
						</tr>
						<tr>
							<th>Tanggal Lahir</th>
							<td><?php echo tanggal_indo($detail->tanggal_lahir) ?></td>
						</tr>
						<tr>
							<th>Pelanggaran</th>
							<td>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $pelanggaran['nama_pelanggaran'] ?>" readonly>
								</div>
							</td>	
						</tr>
						<tr>
							<th>Kategori Pelanggaran</th>
							<td>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $pelanggaran['kategori_pelanggaran'] ?>" readonly>
								</div>
							</td>	
						</tr>
						<tr>
							<th>Penghukum</th>
							<td>
								<select name="penghukum" id="penghukum"  placeholder="Test" class="form-control" >
									<option value="<?php echo $pelanggaran['nama_penghukum'] ?>"><?php echo $pelanggaran['nama_penghukum'] ?></option>

									<optgroup label="Staf Pengasuhan Santri">
									<?php foreach ($penghukumpengasuhan as $row): ?>
                        
										<option value="<?php echo $row->nama_penghukum ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>

									<optgroup label="Keamanan Pusat">
									<?php foreach ($penghukumkeamanan as $row): ?>
                        
										<option value="<?php echo $row->nama_penghukum ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>
									
									
								</select>
							</td>	
						</tr>
						<tr>
							<th>Hukuman</th>
							<td>
								<div class="form-group">
									<input type="text" name="hukuman" class="form-control" id="hukuman" value="<?php echo $pelanggaran['hukuman'] ?>" >
								</div>
							</td>	
						</tr>
						<tr>
							<th>Keterangan</th>
							<td>
								<div class="form-group">
									<input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $pelanggaran['keterangan'] ?>">
								</div>
							</td>	
						</tr>
					</Table>
					<button type="submit" class='btn btn-primary'>Edit Pelanggaran</button>
					<a href="<?= base_url('pelanggaran/detail/' . $s['id']); ?>" class='btn btn-danger'>Kembali</a>
				</form>
				</div>
			</div>
		</form>
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

<!-- <script>
	$(document).ready(function()){
		$("nama_pelanggaran").autocomplete({
			source : "<?php echo site_url('pelanggaran/fill_kategori_pelanggaran') ?>",

			select : function(event, ui){
				$('[name="nama_pelanggaran"]')val(ui.item.label);
			}
		})
	}
</script> -->

<script>
	function pilih_pelanggaran(){
		var nama_pelanggaran = $("#nama_pelanggaran").val();
		$.ajax({
			url:"<?php echo base_url() ?>pelanggaran/fill_kategori_pelanggaran",
			data:"nama_pelanggaran=" + nama_pelanggaran ,
			method : 'post',
			dataType : 'json',
				success: function(data)
				{	$("#kategori").val(data.kategori);
				
				}
		});
	}
	$(function(){
		$(document).ready(function(){
	$('#nama_pelanggaran').select2()
		});
	});
</script>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>