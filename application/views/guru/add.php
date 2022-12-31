<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
		  <div class="box box-primary mb-12">
            <div class="box-header with-border py-1"> 
<!--            
			<div class="card shadow mb-12">
				<div class="card-header  py-2"> -->
					<h3 class="m-3 font-weight-bold text-primary">Tambah Guru</h3>
				</div>
				
				<?php 
					
					//<!-- echo form_open('guru/add',array("class"=>"form-horizontal")); --> 
 					echo form_open('guru/add', 'role="form" class="form-horizontal"');					
					
					?>
				<div class="box-body">
					
					<div class="form-group row py-2">
					
					 	<label for="nama_lengkap" class="col-sm-2 control-label"><span class="text-danger">*</span>Nama
							Lengkap</label> 
						<div class="col-sm-4">
							<input type="text" name="nama_lengkap"
								value="<?php echo $this->input->post('nama_lengkap'); ?>" class="form-control"
								id="nama_lengkap">
							<span class="text-danger"><?php echo form_error('nama_lengkap');?></span>
						</div> 
						</div>
				
					<div class="form-group row">
						<label for="jenis_kelamin" class="col-sm-2 control-label"><span
								class="text-danger">*</span>Jenis Kelamin</label>
						<div class="col-sm-2">
							<select name="jenis_kelamin" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_kelamin_values = array(
								'L'=>'Laki-laki',
								'P'=>'Perempuan',
								);

								foreach($jenis_kelamin_values as $value => $display_text)
								{
								$selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";

								echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('jenis_kelamin');?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
						<div class="col-sm-4">
							<input type="text" name="tempat_lahir"
								value="<?php echo $this->input->post('tempat_lahir'); ?>" class="form-control"
								id="tempat_lahir" />
						</div>
					</div>
					<div class="form-group row">
						<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
						<div class="col-sm-4">
							<input type="date" name="tanggal_lahir"
								value="<?php echo $this->input->post('tanggal_lahir'); ?>" class="form-control"
								id="tanggal_lahir" />
						</div>
					</div>
					<div class="form-group row">
						<label for="nip" class="col-sm-2 control-label">Kamar</label>
						<div class="col-sm-4">
							<input type="text" name="nip" value="<?php echo $this->input->post('nip'); ?>"
								class="form-control" id="nip" />
							<span class="text-danger"><?php echo form_error('nip');?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="nik" class="col-sm-2 control-label">Nomor Induk Kependudukan</label>
						<div class="col-sm-4">
							<input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>"
								class="form-control" id="nik" />
							<span class="text-danger"><?php echo form_error('nik');?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="nikk" class="col-sm-2 control-label">Nomor BPJS</label>
						<div class="col-sm-4">
							<input type="text" name="no_kis" value="<?php echo $this->input->post('no_kis'); ?>"
								class="form-control" id="no_kis" />
							<span class="text-danger"><?php echo form_error('no_kis');?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="alamat" class="col-sm-2 control-label">Alamat</label>
						<div class="col-sm-4">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>"
								class="form-control" id="alamat" >
						</div>
					</div>
					<div class="form-group row">
						<label for="gelar_depan" class="col-sm-2 control-label">Gelar Depan</label>
						<div class="col-sm-4">
							<input type="text" name="gelar_depan"
								value="<?php echo $this->input->post('gelar_depan'); ?>" class="form-control"
								id="gelar_depan" />
						</div>
					</div>
					<div class="form-group row">
						<label for="gelar_belakang" class="col-sm-2 control-label">Gelar Belakang</label>
						<div class="col-sm-4">
							<input type="text" name="gelar_belakang"
								value="<?php echo $this->input->post('gelar_belakang'); ?>" class="form-control"
								id="gelar_belakang" />
						</div>
					</div>
					<div class="form-group row">
						<label for="pendidikan_terakhir" class="col-sm-2 control-label">Pendidikan Terakhir</label>
						<div class="col-sm-4">
							<input type="text" name="pendidikan_terakhir"
								value="<?php echo $this->input->post('pendidikan_terakhir'); ?>" class="form-control"
								id="pendidikan_terakhir" />
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 control-label"><span class="text-danger">*</span> Email</label>
						<div class="col-sm-4">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>"
								class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="telp" class="col-sm-2 control-label">Telp</label>
						<div class="col-sm-4">
							<input type="text" name="telp" value="<?php echo $this->input->post('telp'); ?>"
								class="form-control" id="telp" />
							<span class="text-danger"><?php echo form_error('telp');?></span>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?= base_url('guru') ?>" class="btn btn-secondary">Batal</a>
						</div>
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
