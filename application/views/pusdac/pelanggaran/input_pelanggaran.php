<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Input Pelanggaran Santri (PUSDAC)</h3>
				</div>
				<div class="card-body">
					<form action="<?= base_url('pusdac/pelanggaran/input_pelanggaran/'. $detail->id ) ?>" method="post">
						<table class="table table-bordered table-striped">
							<tr>
							<th style="width: 12rem;">Status</th>
							<td><?php echo ($detail->aktif == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
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
								<select name="nama_pelanggaran" id="nama_pelanggaran" onchange="pilih_pelanggaran()" placeholder="Test" class="form-control" required>
									<option value="">-Silahkan Pilih-</option>

									<optgroup label="Ringan">
									<?php foreach ($pelanggaranringan as $row): ?>
                        
										<option value="<?php echo $row->nama_pelanggaran ?>"> <?php echo $row->nama_pelanggaran ?> </option>

									<?php endforeach ?>
									
									<optgroup label="Sedang">
									<?php foreach ($pelanggaransedang as $row): ?>
                        
										<option value="<?php echo $row->nama_pelanggaran ?>"> <?php echo $row->nama_pelanggaran ?> </option>

									<?php endforeach ?>

									<optgroup label="Berat">
									<?php foreach ($pelanggaranberat as $row): ?>
                        
										<option value="<?php echo $row->nama_pelanggaran ?>"> <?php echo $row->nama_pelanggaran ?> </option>

									<?php endforeach ?>
									
								</select>
							</td>
						</tr>
						<tr>
							<th>Kategori Pelanggaran</th>
							<td>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori Pelanggaran" readonly>
								</div>
							</td>	
						</tr>
						<tr>
							<th>Point Pelanggaran</th>
							<td>
								<div class="form-group">
									<input type="text" name="poin" class="form-control" id="poin" placeholder="Point Pelanggaran" readonly>
								</div>
							</td>	
						</tr>
						<tr>
							<th>Penghukum</th>
							<td>
								<select name="penghukum" id="penghukum"  placeholder="Test" class="form-control" required >
									<option value="">-Silahkan Pilih-</option>

									<optgroup label="Staf PUSDAC">
									<?php foreach ($stafpusdac as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>

									<optgroup label="Staf Pengajaran">
									<?php foreach ($staftalim as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>
									
								</select>
							</td>	
						</tr>
						<!-- <tr>
							<th>Hukuman</th>
							<td>
								<div class="form-group">
									<select  name="hukuman" class="form-control" id="hukuman">
									<option value="">-Silahkan Pilih-</option>
										<optgroup label="Ringan">
											<option value="Blacklist">Blacklist</option>
    										<option value="Dijemur">Dijemur</option>
    										<option value="Qiro'atul Qur'an">Qiro'atul Qur'an</option>
											<option value="Hifdzul Qur'an">Hifdzul Qur'an</option>
										<optgroup label="Sedang">
      										<option value="Jundi">Jundi</option>
      										<option value="Botak">Botak</option>
											<option value="Surat Perjanjian">Surat Perjanjian</option>
											<option value="Diturunkan dari kepengurusan">Diturunkan dari kepengurusan</option>
										<optgroup label="Berat">
      										<option value="Panggilan Orang Tua/Wali">Panggilan Orang Tua/Wali</option>
      										<option value="Di Pindah">Di Pindah</option>
											<option value="Di Skorsing">Di Skorsing</option>
											<option value="Di Keluarkan">Di Keluarkan</option>
  									</select>
								</div>
							</td>	
						</tr> -->
						<tr>
							<th>Keterangan</th>
							<td>
								<div class="form-group">
									<input type="text" name="keterangan" class="form-control" id="keterangan" >
								</div>
							</td>	
						</tr>
					</Table>
					<button type="submit" class='btn btn-primary'>Tambah Pelanggaran</button>
					<a href="<?= base_url('pusdac/pelanggaran'); ?>" class='btn btn-danger'>Kembali</a>
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

<script>
	function pilih_pelanggaran(){
		var nama_pelanggaran = $("#nama_pelanggaran").val();
		$.ajax({
			url:"<?php echo base_url() ?>pusdac/pelanggaran/fill_kategori_pelanggaran",
			data:"nama_pelanggaran=" + nama_pelanggaran ,
			method : 'post',
			dataType : 'json',
				success: function(data)
				{	$("#kategori").val(data.kategori);
					$("#poin").val(data.poin);
				
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