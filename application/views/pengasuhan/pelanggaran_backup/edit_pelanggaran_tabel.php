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
					<form action="<?= base_url('pengasuhan/pelanggaran/edit_pelanggaran_tabel/' . $pelanggaran['id_pelanggaran']) ?>" method="post">
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
									<option value="<?php echo $pelanggaran['id_penghukum'] ?>"><?php echo $pelanggaran['nama_penghukum'] ?></option>

									<optgroup label="Staf Pengasuhan Santri">
									<?php foreach ($penghukumpengasuhan as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>

									<optgroup label="Keamanan Pusat">
									<?php foreach ($penghukumkeamanan as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>
									
									
								</select>
							</td>	
						</tr>
						<tr>
							<th>Hukuman</th>
							<td>
								<div class="form-group">
									<select  name="hukuman" class="form-control" id="hukuman">
									<option value="<?php echo $pelanggaran['hukuman'] ?>"><?php echo $pelanggaran['hukuman'] ?></option>
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
					<a href="<?= base_url('pengasuhan/pelanggaran/tabel_pelanggaran'); ?>" class='btn btn-danger'>Kembali</a>
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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>