<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Profil Lembaga</h3>
				</div>
				<?php echo form_open_multipart('profil/edit/' . $profil['id']); ?>
				<div class="card-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="namaSekolah" class="control-label"><span class="text-danger">*</span>Nama Institusi</label>
							<div class="form-group">
								<input type="text" name="namaSekolah" value="<?php echo ($this->input->post('namaSekolah') ? $this->input->post('namaSekolah') : $profil['namaSekolah']); ?>" class="form-control" id="namaSekolah" />
								<span class="text-danger"><?php echo form_error('namaSekolah'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="npsn" class="control-label">Nomor Induk Institusi</label>
							<div class="form-group">
								<input type="text" name="npsn" value="<?php echo ($this->input->post('npsn') ? $this->input->post('npsn') : $profil['npsn']); ?>" class="form-control" id="npsn" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="bentukSekolah" class="control-label">Bentuk Institusi</label>
							<div class="form-group">
								<input type="text" name="bentukSekolah" value="<?php echo ($this->input->post('bentukSekolah') ? $this->input->post('bentukSekolah') : $profil['bentukSekolah']); ?>" class="form-control" id="bentukSekolah" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
							<div class="form-group">
								<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $profil['alamat']); ?>" class="form-control" id="alamat" />
								<span class="text-danger"><?php echo form_error('alamat'); ?></span>
							</div>
						</div>
						<div class="col-md-6">
							<label for="desaKelurahan" class="control-label">Kelurahan</label>
							<div class="form-group">
								<input type="text" name="desaKelurahan" value="<?php echo ($this->input->post('desaKelurahan') ? $this->input->post('desaKelurahan') : $profil['desaKelurahan']); ?>" class="form-control" id="desaKelurahan" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="kecamatan" class="control-label">Kecamatan</label>
							<div class="form-group">
								<input type="text" name="kecamatan" value="<?php echo ($this->input->post('kecamatan') ? $this->input->post('kecamatan') : $profil['kecamatan']); ?>" class="form-control" id="kecamatan" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="kabupatenKota" class="control-label">Kota</label>
							<div class="form-group">
								<input type="text" name="kabupatenKota" value="<?php echo ($this->input->post('kabupatenKota') ? $this->input->post('kabupatenKota') : $profil['kabupatenKota']); ?>" class="form-control" id="kabupatenKota" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="provinsi" class="control-label">Provinsi</label>
							<div class="form-group">
								<input type="text" name="provinsi" value="<?php echo ($this->input->post('provinsi') ? $this->input->post('provinsi') : $profil['provinsi']); ?>" class="form-control" id="provinsi" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="telp" class="control-label">Telp</label>
							<div class="form-group">
								<input type="text" name="telp" value="<?php echo ($this->input->post('telp') ? $this->input->post('telp') : $profil['telp']); ?>" class="form-control" id="telp" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="website" class="control-label">Website</label>
							<div class="form-group">
								<input type="text" name="website" value="<?php echo ($this->input->post('website') ? $this->input->post('website') : $profil['website']); ?>" class="form-control" id="website" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="email" class="control-label">Email</label>
							<div class="form-group">
								<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $profil['email']); ?>" class="form-control" id="email" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="kodePos" class="control-label">Kode Pos</label>
							<div class="form-group">
								<input type="text" name="kodePos" value="<?php echo ($this->input->post('kodePos') ? $this->input->post('kodePos') : $profil['kodePos']); ?>" class="form-control" id="kodePos" />
							</div>
						</div>
						<div class="col-md-6">
							<label for="logo" class="control-label">Logo (PNG)</label>
							<div class="form-group">
								<img class="mr-4" src="<?php echo ($profil['logo'] ? base_url('uploads/profil/'.$profil['logo']) : base_url('uploads/profil/default.png')); ?>" alt="" srcset="" height="100px">
								<input type="file" name="logo" id="logo" accept="image/x-png" />
								<input type="hidden" name="logo_old" value="<?= $profil['logo']; ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">
						Simpan
					</button>
					<a class="btn btn-secondary" href="<?= base_url('profil'); ?>">Batal</a>
				</div>
				<?php echo form_close(); ?>
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