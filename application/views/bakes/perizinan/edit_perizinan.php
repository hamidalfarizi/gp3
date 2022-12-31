<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Edit Perizinan Santri</h3>
				</div>
				<div class="card-body">
					<form action="<?= base_url('bakes/perizinan/edit_perizinan/' . $perizinan['id_perizinan']) ?>" method="post">
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
							<th>Pengizin</th>
							<td>
								<select name="pengizin" id="pengizin"  placeholder="Test" class="form-control" >
									<option value="<?php echo $perizinan['id_pengizin'] ?>"><?php echo $perizinan['nama'] ?></option>

									<optgroup label="Staf Bagian Kesehatan">
									<?php foreach ($stafbakes as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>

									<optgroup label="Bagian Kesehatan Kelas 6">
									<?php foreach ($stafbakeskelas6 as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>
								</select>
							</td>	
						</tr>
						<tr>
							<th>Jenis Perizinan</th>
							<td>
								<div class="form-group">
									<select name="nama_perizinan" id="nama_perizinan" onchange="pilih_perizinan()" placeholder="Test" class="form-control" required >
										<option value="<?php echo $perizinan['nama_perizinan'] ?>"><?php echo $perizinan['nama_perizinan'] ?></option>
										<optgroup label="Pilihan">
										<option value="Berobat Di Rumah">Berobat Di Rumah</option>
										<option value="Berobat Di Rumah Sakit">Berobat Di Rumah Sakit</option>
								</select>
								</div>
							</td>
						</tr>
						<tr>
							<th>Alasan</th>
							<td>
								<div class="form-group">
									<input type="text" name="alasan" class="form-control" id="alasan" value="<?php echo $perizinan['alasan'] ?>" >
								</div>
							</td>	
						</tr>
						
						<tr>
							<th>Keterangan</th>
							<td>
								<div class="form-group">
									<input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $perizinan['keterangan'] ?>" >
								</div>
							</td>	
						</tr>
						<tr>
							<th>Status</th>
							<td>
								<div class="form-group">
									<select name="status" class="form-control">
										<option value="">Pilih</option>
										<?php
										$aktif_values = array(
											'1' => 'Masih Diluar',
											'0' => 'Sudah Kembali',
										);

										foreach ($aktif_values as $value => $display_text) {
											// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
											$selected = ($value == $perizinan['status']) ? ' selected="selected"' : "";

											echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
										}
										?>
									</select>
								</div>
							</td>
						</tr>			
					</Table>
					<button type="submit" class='btn btn-primary'>Edit Perizinan</button>
					<a href="<?= base_url('bakes/perizinan/detail/' . $detail->id); ?>" class='btn btn-danger'>Kembali</a>
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