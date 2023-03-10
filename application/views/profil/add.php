<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Profil Lembaga</h3>
				</div>
				<div class="card-body">
					<?php echo form_open_multipart('profil/add'); ?>
					<div class="box-body">
						<div class="row clearfix">
							<div class="col-md-6">
								<label for="namaSekolah" class="control-label"><span class="text-danger">*</span>Nama Institusi</label>
								<div class="form-group">
									<input type="text" name="namaSekolah" value="<?php echo $this->input->post('namaSekolah'); ?>" class="form-control" id="namaSekolah" />
									<span class="text-danger"><?php echo form_error('namaSekolah'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="npsn" class="control-label">Nomor Induk Institusi</label>
								<div class="form-group">
									<input type="text" name="npsn" value="<?php echo $this->input->post('npsn'); ?>" class="form-control" id="npsn" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="bentukSekolah" class="control-label">Bentuk Institusi</label>
								<div class="form-group">
									<input type="text" name="bentukSekolah" value="<?php echo $this->input->post('bentukSekolah'); ?>" class="form-control" id="bentukSekolah" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
								<div class="form-group">
									<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
									<span class="text-danger"><?php echo form_error('alamat'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<label for="desaKelurahan" class="control-label">Kelurahan</label>
								<div class="form-group">
									<input type="text" name="desaKelurahan" value="<?php echo $this->input->post('desaKelurahan'); ?>" class="form-control" id="desaKelurahan" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="kecamatan" class="control-label">Kecamatan</label>
								<div class="form-group">
									<input type="text" name="kecamatan" value="<?php echo $this->input->post('kecamatan'); ?>" class="form-control" id="kecamatan" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="kabupatenKota" class="control-label">Kota</label>
								<div class="form-group">
									<input type="text" name="kabupatenKota" value="<?php echo $this->input->post('kabupatenKota'); ?>" class="form-control" id="kabupatenKota" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="provinsi" class="control-label">Provinsi</label>
								<div class="form-group">
									<input type="text" name="provinsi" value="<?php echo $this->input->post('provinsi'); ?>" class="form-control" id="provinsi" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="telp" class="control-label">Telp</label>
								<div class="form-group">
									<input type="text" name="telp" value="<?php echo $this->input->post('telp'); ?>" class="form-control" id="telp" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="website" class="control-label">Website</label>
								<div class="form-group">
									<input type="text" name="website" value="<?php echo $this->input->post('website'); ?>" class="form-control" id="website" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="email" class="control-label">Email</label>
								<div class="form-group">
									<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="kodePos" class="control-label">Kode Pos</label>
								<div class="form-group">
									<input type="text" name="kodePos" value="<?php echo $this->input->post('kodePos'); ?>" class="form-control" id="kodePos" />
								</div>
							</div>
							<div class="col-md-6">
								<label for="logo" class="control-label">Logo (PNG)</label>
								<div class="form-group">
									<input type="file" name="logo" class="form-control-file" id="logo" accept="image/x-png"/>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-check"></i> Save
						</button>
					</div>
					<?php echo form_close(); ?>
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

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>