<!-- Begin Page Content -->
<head>
</head>
<div class="container-fluid text-dark">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Edit Siswa</h3>
				</div>
				<div class="card-body">
					<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-identitas-tab" data-toggle="pill" href="#pills-identitas" role="tab" aria-controls="pills-identitas" aria-selected="true">IDENTITAS PRIBADI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-ayah-tab" data-toggle="pill" href="#pills-ayah" role="tab" aria-controls="pills-ayah" aria-selected="false">IDENTITAS AYAH</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-ibu-tab" data-toggle="pill" href="#pills-ibu" role="tab" aria-controls="pills-ibu" aria-selected="false">IDENTITAS IBU</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-wali-tab" data-toggle="pill" href="#pills-wali" role="tab" aria-controls="pills-wali" aria-selected="false">IDENTITAS WALI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-data-fisik-tab" data-toggle="pill" href="#pills-data-fisik" role="tab" aria-controls="pills-data-fisik" aria-selected="false">DATA FISIK</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-penyakit-tab" data-toggle="pill" href="#pills-penyakit" role="tab" aria-controls="pills-penyakit" aria-selected="false">PENYAKIT YANG PERNAH DIDERITA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-kecakapan-tab" data-toggle="pill" href="#pills-kecakapan" role="tab" aria-controls="pills-kecakapan" aria-selected="false">KECAKAPAN KHUSUS</a>
					</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-identitas" role="tabpanel" aria-labelledby="pills-identitas-tab">
							<?php echo form_open_multipart('siswa/edit/' . $siswa['nis'], array("class" => "form-horizontal")); ?>
							<!-- baru -->
							<h3 class="text-info font-weight-bold">Identitas Pribadi</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nis"><span class="text-danger">*</span>Stambuk</label>
										<input type="number" name="nis" value="<?php echo ($this->input->post('nis') ? $this->input->post('nis') : $siswa['nis']); ?>" class="form-control" id="nis" />
										<span class="text-danger"><?php echo form_error('nis'); ?></span>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tahun_masuk">Tahun Masuk Gontor</label>
										<input type="Number" name="tahun_masuk" value="<?php echo ($this->input->post('tahun_masuk') ? $this->input->post('tahun_masuk') : $siswa['tahun_masuk']); ?>" class="form-control" id="tahun_masuk" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nama_lengkap"><span class="text-danger">*</span>Nama Lengkap</label>
										<input type="text" name="nama_lengkap" value="<?php echo ($this->input->post('nama_lengkap') ? $this->input->post('nama_lengkap') : $siswa['nama_lengkap']); ?>" class="form-control" id="nama_lengkap" />
										<span class="text-danger"><?php echo form_error('nama_lengkap'); ?></span>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nama_arab">Nama Arab</label>
										<input type="text" name="nama_arab" value="<?php echo ($this->input->post('nama_arab') ? $this->input->post('nama_arab') : $siswa['nama_arab']); ?>" class="form-control" id="nama_arab" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nama_panggilan">Nama Panggilan</label>
										<input type="text" name="nama_panggilan" value="<?php echo ($this->input->post('nama_panggilan') ? $this->input->post('nama_panggilan') : $siswa['nama_panggilan']); ?>" class="form-control" id="nama_panggilan" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nisn">Nomor NISN</label>
										<input type="text" name="nisn" value="<?php echo ($this->input->post('nisn') ? $this->input->post('nisn') : $siswa['nisn']); ?>" class="form-control" id="nisn" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="kelas">Kelas</label>
										<select name="kelas" class="form-control">
											<?php
											$kelas_values = array(
												'1-B' => '1-B',
												'1-C' => '1-C',
												'1-D' => '1-D',
												'1-E' => '1-E',
												'1-F' => '1-F',
												'1 Int B' => '1 Int B',												
												'2-B' => '2-B',
												'2-C' => '2-C',
												'2-D' => '2-D',
												'2-E' => '2-E',
												'2-F' => '2-F',												
												'3-B' => '3-B',
												'3-C' => '3-C',
												'3-D' => '3-D',
												'3-E' => '3-E',
												'3-F' => '3-F',
												'3-G' => '3-G',
												'3-H' => '3-H',
												'3-I' => '3-I',
												'3 Int B' => '3 Int B',
												'3 Int C' => '3 Int C',
												'3 Int D' => '3 Int D',
												'4-B' => '4-B',
												'4-C' => '4-C',
												'4-D' => '4-D',
												'4-E' => '4-E',
												'4-F' => '4-F',																						
												'5-B' => '5-B',
												'5-C' => '5-C',
												'5-D' => '5-D',
												'5-E' => '5-E',
												'5-F' => '5-F',
												'5-G' => '5-G',
												'5-H' => '5-H',
												'5-I' => '5-I',
												'5-J' => '5-J',
												'6-B' => '6-B',
												'6-C' => '6-C',
												'6-D' => '6-D',
												'6-E' => '6-E',
												'6-F' => '6-F',
												'6-G' => '6-G',
												'6-H' => '6-H',
												'6-I' => '6-I',
											);

											foreach ($kelas_values as $value => $display_text) {
												$selected = ($value == $siswa['kelas']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="rayon">Rayon</label>
										<div>
											<select name="rayon" class="form-control">
												<option value="">Select</option>
												<?php
												$rayon_values = array(
													'Al Azhar Lt. 1' => 'Al Azhar Lt. 1',
													'Al Azhar Lt. 2' => 'Al Azhar Lt. 2',
													'Santiniketan' => 'Santiniketan',
													'Aligarh' => 'Aligarh',
													'Syanggit Lt. 1' => 'Syanggit Lt. 1',
													'Syanggit Lt. 2' => 'Syanggit Lt. 2',
													'Sudan' => 'Sudan',
													'Palestina' => 'Palestina',
													'Makkah' => 'Makkah',
													'Tunisia Lt. 1' => 'Tunisia Lt. 1',
													'Tunisia Lt. 2' => 'Tunisia Lt. 2',
													'Syiria Lt. 1' => 'Syiria Lt. 1',		
													'Syiria Lt. 2' => 'Syiria Lt. 2',										
												);

												foreach ($rayon_values as $value => $display_text) {
													$selected = ($value == $siswa['rayon']) ? ' selected="selected"' : "";
													// $selected = ($value == 1) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="konsul">Konsulat</label>
										<select name="konsul" class="form-control">
											<?php
											$konsul_values = array(
												'Aceh, Padang, Sumatera Utara' => 'Aceh, Padang, Sumatera Utara',
												'Banten' => 'Banten',
												'BANUSTRA' => 'BANUSTRA',
												'Banyumas' => 'Banyumas',
												'Bekasi' => 'Bekasi',
												'Besuki' => 'Besuki',
												'Bogor' => 'Bogor',
												'Bojonegoro' => 'Bojonegoro',
												'Cirebon' => 'Cirebon',
												'Foreign' => 'Foreign',
												'Gresik' => 'Gresik',
												'Jakarta' => 'Jakarta',
												'Jambi' => 'Jambi',
												'Jombang' => 'Jombang',
												'Kalimantan' => 'Kalimantan',
												'Kediri' => 'Kediri',
												'Magelang' => 'Magelang',
												'Malang' => 'Malang',
												'Palembang, Lampung' => 'Palembang, Lampung',
												'Pekalongan' => 'Pekalongan',
												'Ponorogo, Madiun' => 'Ponorogo, Madiun',
												'Priangan' => 'Priangan',
												'Riau' => 'Riau',
												'Semarang' => 'Semarang',
												'SUMALIA' => 'SUMALIA',
												'SURAMADU' => 'SURAMADU',
												'Yogyakarta, Surakarta' => 'Yogyakarta, Surakarta',
											);

											foreach ($konsul_values as $value => $display_text) {
												$selected = ($value == $siswa['konsul']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="nik">NIK (Nomor Induk Kependudukan)</label>
										<input type="number" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $siswa['nik']); ?>" class="form-control" id="nik" maxlength="16" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="no_kis">No BPJS (Jikalau Ada)</label>
										<input type="number" name="no_kis" value="<?php echo ($this->input->post('no_kis') ? $this->input->post('no_kis') : $siswa['no_kis']); ?>" class="form-control" id="no_kis" maxlength="16" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $siswa['tempat_lahir']); ?>" class="form-control" id="tempat_lahir" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tanggal_lahir">Tanggal Lahir</label>
										<input type="date" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $siswa['tanggal_lahir']); ?>" class="form-control" id="tanggal_lahir" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kewarganegaraan">Kewarganegaraan</label>
										<select name="kewarganegaraan" class="form-control">
											<?php
											$kewarganegaraan_values = array(
												
												'WNI' => 'WNI',
												'WNA' => 'WNA',
											);

											foreach ($kewarganegaraan_values as $value => $display_text) {
												$selected = ($value == $siswa['kewarganegaraan']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="suku">Suku</label>
										<input type="text" name="suku" value="<?php echo ($this->input->post('suku') ? $this->input->post('suku') : $siswa['suku']); ?>" class="form-control" id="suku" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $siswa['alamat']); ?>" class="form-control" id="alamat" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kelurahan">Kelurahan</label>
										<input type="text" name="kelurahan" value="<?php echo ($this->input->post('kelurahan') ? $this->input->post('kelurahan') : $siswa['kelurahan']); ?>" class="form-control" id="kelurahan" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kecamatan">Kecamatan</label>
										<input type="text" name="kecamatan" value="<?php echo ($this->input->post('kecamatan') ? $this->input->post('kecamatan') : $siswa['kecamatan']); ?>" class="form-control" id="kecamatan" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kota_kab">Kota/Kab</label>
										<select name="kota_kab" class="form-control" >
											
											<option value="">Pilih</option>
											<option value="<?php echo $siswa['kota_kab'] ?>" selected> <?php echo $siswa['kota_kab'] ?> </option>

											<?php foreach ($kabupaten as $row): ?>	

											<option value="<?php echo $row->kabupaten ?>"> <?php echo $row->kabupaten ?> </option>
																				
											<?php endforeach ?>

										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="provinsi">Provinsi</label>
										<select name="provinsi" class="form-control" >

											<option value="">Pilih</option>
											<option value="<?php echo $siswa['provinsi'] ?>" selected> <?php echo $siswa['provinsi'] ?> </option>

											<?php foreach ($provinsi as $row): ?>	

											<option value="<?php echo $row->provinsi ?>"> <?php echo $row->provinsi ?> </option>
																				
											<?php endforeach ?>

										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="dibesarkan_di">Di Besarkan Di</label>
										<input type="text" name="dibesarkan_di" value="<?php echo ($this->input->post('dibesarkan_di') ? $this->input->post('dibesarkan_di') : $siswa['dibesarkan_di']); ?>" class="form-control" id="dibesarkan_di" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kode_pos">Kode Pos</label>
										<input type="number" name="kode_pos" value="<?php echo ($this->input->post('kode_pos') ? $this->input->post('kode_pos') : $siswa['kode_pos']); ?>" class="form-control" id="kode_pos" maxlength="5" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="aktif">Status Keaktifan</label>
										<div>
											<select name="aktif" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'1' => 'Aktif',
													'0' => 'Tidak Aktif',
												);

												foreach ($aktif_values as $value => $display_text) {
													$selected = ($value == $siswa['aktif']) ? ' selected="selected"' : "";
													// $selected = ($value == 1) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<h3 class="text-info font-weight-bold">Kontak</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="no_telp">Nomor Telpon</label>
										<input type="number" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $siswa['no_telp']); ?>" class="form-control" id="no_telp" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="facebook">Facebook</label>
										<input type="text" name="facebook" value="<?php echo ($this->input->post('facebook') ? $this->input->post('facebook') : $siswa['facebook']); ?>" class="form-control" id="facebook" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $siswa['email']); ?>" class="form-control" id="email" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="twitter">Twitter</label>
										<input type="text" name="twitter" value="<?php echo ($this->input->post('twitter') ? $this->input->post('twitter') : $siswa['twitter']); ?>" class="form-control" id="twitter" />
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-ayah" role="tabpanel" aria-labelledby="pills-ayah-tab">
							<h3 class="text-info font-weight-bold">Identitas Ayah</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ayah">Nama Lengkap</label>
										<input type="text" name="ayah" value="<?php echo ($this->input->post('ayah') ? $this->input->post('ayah') : $siswa['ayah']); ?>" class="form-control" id="ayah" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pekerjaan_ayah">Pekerjaan</label>
										<input type="text" name="pekerjaan_ayah" value="<?php echo ($this->input->post('pekerjaan_ayah') ? $this->input->post('pekerjaan_ayah') : $siswa['pekerjaan_ayah']); ?>" class="form-control" id="pekerjaan_ayah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="agama_ayah">Agama</label>
										<input type="text" name="agama_ayah" value="<?php echo ($this->input->post('agama_ayah') ? $this->input->post('agama_ayah') : $siswa['agama_ayah']); ?>" class="form-control" id="agama_ayah" />
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="usia_ayah">Usia</label>
										<input type="number" name="usia_ayah" value="<?php echo ($this->input->post('usia_ayah') ? $this->input->post('usia_ayah') : $siswa['usia_ayah']); ?>" class="form-control" id="usia_ayah" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pend_ayah">Pendidikan Terakhir</label>
										<input type="text" name="pend_ayah" value="<?php echo ($this->input->post('pend_ayah') ? $this->input->post('pend_ayah') : $siswa['pend_ayah']); ?>" class="form-control" id="pend_ayah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kewarga_ayah">Kewarganegaraan</label>
										<select name="kewarga_ayah" class="form-control">
											<?php
											$kewarganegaraan_values = array(
												
												'WNI' => 'WNI',
												'WNA' => 'WNA',
											);

											foreach ($kewarganegaraan_values as $value => $display_text) {
												$selected = ($value == $siswa['kewarga_ayah']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="suku_ayah">Suku</label>
										<input type="text" name="suku_ayah" value="<?php echo ($this->input->post('suku_ayah') ? $this->input->post('suku_ayah') : $siswa['suku_ayah']); ?>" class="form-control" id="suku_ayah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ormas_ayah">ORMAS</label>
										<input type="text" name="ormas_ayah" value="<?php echo ($this->input->post('ormas_ayah') ? $this->input->post('ormas_ayah') : $siswa['ormas_ayah']); ?>" class="form-control" id="ormas_ayah" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="orpol_ayah">ORPOL</label>
										<input type="text" name="orpol_ayah" value="<?php echo ($this->input->post('orpol_ayah') ? $this->input->post('orpol_ayah') : $siswa['orpol_ayah']); ?>" class="form-control" id="orpol_ayah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kedudukan_ayah">Kedudukan di Masyarakat</label>
										<input type="text" name="kedudukan_ayah" value="<?php echo ($this->input->post('kedudukan_ayah') ? $this->input->post('kedudukan_ayah') : $siswa['kedudukan_ayah']); ?>" class="form-control" id="kedudukan_ayah" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="telp_ayah">Telp Ayah</label>
										<input type="number" name="telp_ayah" value="<?php echo ($this->input->post('telp_ayah') ? $this->input->post('telp_ayah') : $siswa['telp_ayah']); ?>" class="form-control" id="telp_ayah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="alumni_ayah">Alumni Gontor</label>
										<div>
											<select name="alumni_ayah" class="form-control" id="mySelectAyah" onchange="myFunctionAyah()">
												<option value="">Select</option>
												<?php
												$aktif_values_ayah = array(
													'Ya' => 'Ya',
													'Tidak' => 'Tidak',
												);
												
												foreach ($aktif_values_ayah as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['alumni_ayah']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}

												?>

											</select>
										</div>
									</div>
								</div>	
							</div>
							<div class="row" id="showAlumniAyah" style='visibility:hidden'>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="stambuk_ayah">Stambuk</label>
										<input type="number" name="stambuk_ayah" value="<?php echo ($this->input->post('stambuk_ayah') ? $this->input->post('stambuk_ayah') : $siswa['stambuk_ayah']); ?>" class="form-control" id="stambuk_ayah" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tahun_lulus_ayah">Tahun Lulus</label>
										<input type="text" name="tahun_lulus_ayah" value="<?php echo ($this->input->post('tahun_lulus_ayah') ? $this->input->post('tahun_lulus_ayah') : $siswa['tahun_lulus_ayah']); ?>" class="form-control" id="tahun_lulus_ayah" />
									</div>
								</div>	
							</div>
						</div>
						<div class="tab-pane fade" id="pills-ibu" role="tabpanel" aria-labelledby="pills-ibu-tab">
							<h3 class="text-info font-weight-bold">Identitas Ibu</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ibu">Nama Lengkap</label>
										<input type="text" name="ibu" value="<?php echo ($this->input->post('ibu') ? $this->input->post('ibu') : $siswa['ibu']); ?>" class="form-control" id="ibu" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
										<input type="text" name="pekerjaan_ibu" value="<?php echo ($this->input->post('pekerjaan_ibu') ? $this->input->post('pekerjaan_ibu') : $siswa['pekerjaan_ibu']); ?>" class="form-control" id="pekerjaan_ibu" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="agama_ibu">Agama</label>
										<input type="text" name="agama_ibu" value="<?php echo ($this->input->post('agama_ibu') ? $this->input->post('agama_ibu') : $siswa['agama_ibu']); ?>" class="form-control" id="agama_ibu" />
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="usia_ibu">Usia</label>
										<input type="text" name="usia_ibu" value="<?php echo ($this->input->post('usia_ibu') ? $this->input->post('usia_ibu') : $siswa['usia_ibu']); ?>" class="form-control" id="usia_ibu" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pend_ibu">Pendidikan Terakhir</label>
										<input type="text" name="pend_ibu" value="<?php echo ($this->input->post('pend_ibu') ? $this->input->post('pend_ibu') : $siswa['pend_ibu']); ?>" class="form-control" id="pend_ibu" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kewarga_ibu">Kewarganegaraan</label>
										<select name="kewarga_ibu" class="form-control">
											<?php
											$kewarganegaraan_values = array(
												
												'WNI' => 'WNI',
												'WNA' => 'WNA',
											);

											foreach ($kewarganegaraan_values as $value => $display_text) {
												$selected = ($value == $siswa['kewarga_ibu']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="suku_ibu">Suku</label>
										<input type="text" name="suku_ibu" value="<?php echo ($this->input->post('suku_ibu') ? $this->input->post('suku_ibu') : $siswa['suku_ibu']); ?>" class="form-control" id="suku_ibu" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ormas_ibu">ORMAS</label>
										<input type="text" name="ormas_ibu" value="<?php echo ($this->input->post('ormas_ibu') ? $this->input->post('ormas_ibu') : $siswa['ormas_ibu']); ?>" class="form-control" id="ormas_ibu" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="orpal_ibu">ORPOL</label>
										<input type="text" name="orpal_ibu" value="<?php echo ($this->input->post('orpal_ibu') ? $this->input->post('orpal_ibu') : $siswa['orpal_ibu']); ?>" class="form-control" id="orpal_ibu" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kedudukan_ibu">Kedudukan di Masyarakat</label>
										<input type="text" name="kedudukan_ibu" value="<?php echo ($this->input->post('kedudukan_ibu') ? $this->input->post('kedudukan_ibu') : $siswa['kedudukan_ibu']); ?>" class="form-control" id="kedudukan_ibu" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="telp_ibu">Telp Ibu</label>
										<input type="number" name="telp_ibu" value="<?php echo ($this->input->post('telp_ibu') ? $this->input->post('telp_ibu') : $siswa['telp_ibu']); ?>" class="form-control" id="telp_ibu" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="alumni_ibu">Alumni Gontor</label>
										<div>
											<select name="alumni_ibu" class="form-control" id="mySelectIbu" onchange="myFunctionIbu()">
											<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Ya' => 'Ya',
													'Tidak' => 'Tidak',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['alumni_ibu']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row" id="showAlumniIbu" style='visibility:hidden'>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="stambuk_ibu">Stambuk</label>
										<input type="number" name="stambuk_ibu" value="<?php echo ($this->input->post('stambuk_ibu') ? $this->input->post('stambuk_ibu') : $siswa['stambuk_ibu']); ?>" class="form-control" id="stambuk_ibu" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tahun_lulus_ibu">Tahun Lulus</label>
										<input type="date" name="tahun_lulus_ibu" value="<?php echo ($this->input->post('tahun_lulus_ibu') ? $this->input->post('tahun_lulus_ibu') : $siswa['tahun_lulus_ibu']); ?>" class="form-control" id="tahun_lulus_ibu" />
									</div>
								</div>	
							</div>
							<h3 class="text-info font-weight-bold">Yang Membiayai</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="yang_membiayai">Yang Membiayai</label>
										<select name="yang_membiayai" class="form-control">
										<option value="">Select</option>
											<?php
											$yang_membiayai_values = array(
												
												'Ayah' => 'Ayah',
												'Ibu' => 'Ibu',
												'Wali' => 'Wali',
											);

											foreach ($yang_membiayai_values as $value => $display_text) {
												$selected = ($value == $siswa['yang_membiayai']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="minimal_membiayai">Minimal Membiayai</label>
										<input type="number" name="minimal_membiayai" value="<?php echo ($this->input->post('minimal_membiayai') ? $this->input->post('minimal_membiayai') : $siswa['minimal_membiayai']); ?>" class="form-control" id="minimal_membiayai" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="maksimal_membiayai">Maksimal Membiayai</label>
										<input type="number" name="maksimal_membiayai" value="<?php echo ($this->input->post('maksimal_membiayai') ? $this->input->post('maksimal_membiayai') : $siswa['maksimal_membiayai']); ?>" class="form-control" id="maksimal_membiayai" />
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-wali" role="tabpanel" aria-labelledby="pills-wali-tab">
							<h3 class="text-info font-weight-bold">Identitas Wali</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="hubungan_wali">Hubungan Dengan Santri</label>
										<input type="text" name="hubungan_wali" value="<?php echo ($this->input->post('hubungan_wali') ? $this->input->post('hubungan_wali') : $siswa['hubungan_wali']); ?>" class="form-control" id="hubungan_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="wali">Nama Lengkap</label>
										<input type="text" name="wali" value="<?php echo ($this->input->post('wali') ? $this->input->post('wali') : $siswa['wali']); ?>" class="form-control" id="wali" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pekerjaan_wali">Pekerjaan</label>
										<input type="text" name="pekerjaan_wali" value="<?php echo ($this->input->post('pekerjaan_wali') ? $this->input->post('pekerjaan_wali') : $siswa['pekerjaan_wali']); ?>" class="form-control" id="pekerjaan_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="agama_wali">Agama</label>
										<input type="text" name="agama_wali" value="<?php echo ($this->input->post('agama_wali') ? $this->input->post('agama_wali') : $siswa['agama_wali']); ?>" class="form-control" id="agama_wali" />
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="usia_wali">Usia</label>
										<input type="number" name="usia_wali" value="<?php echo ($this->input->post('usia_wali') ? $this->input->post('usia_wali') : $siswa['usia_wali']); ?>" class="form-control" id="usia_wali" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pend_wali">Pendidikan Terakhir</label>
										<input type="text" name="pend_wali" value="<?php echo ($this->input->post('pend_wali') ? $this->input->post('pend_wali') : $siswa['pend_wali']); ?>" class="form-control" id="pend_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kewarga_wali">Kewarganegaraan</label>
										<select name="kewarga_wali" class="form-control">
										<option value="">Select</option>
											<?php
											$kewarganegaraan_values = array(
												
												'WNI' => 'WNI',
												'WNA' => 'WNA',
											);

											foreach ($kewarganegaraan_values as $value => $display_text) {
												$selected = ($value == $siswa['kewarga_wali']) ? ' selected="selected"' : "";

												echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="suku_wali">Suku</label>
										<input type="text" name="suku_wali" value="<?php echo ($this->input->post('suku_wali') ? $this->input->post('suku_wali') : $siswa['suku_wali']); ?>" class="form-control" id="suku_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ormas_wali">ORMAS</label>
										<input type="text" name="ormas_wali" value="<?php echo ($this->input->post('ormas_wali') ? $this->input->post('ormas_wali') : $siswa['ormas_wali']); ?>" class="form-control" id="ormas_wali" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="orpol_wali">ORPOL</label>
										<input type="text" name="orpol_wali" value="<?php echo ($this->input->post('orpol_wali') ? $this->input->post('orpol_wali') : $siswa['orpol_wali']); ?>" class="form-control" id="orpol_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kedudukan_wali">Kedudukan di Masyarakat</label>
										<input type="text" name="kedudukan_wali" value="<?php echo ($this->input->post('kedudukan_wali') ? $this->input->post('kedudukan_wali') : $siswa['kedudukan_wali']); ?>" class="form-control" id="kedudukan_wali" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="telp_wali">Telp Wali</label>
										<input type="number" name="telp_wali" value="<?php echo ($this->input->post('telp_wali') ? $this->input->post('telp_wali') : $siswa['telp_wali']); ?>" class="form-control" id="telp_wali" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="alumni_wali">Alumni Gontor</label>
										<div>
											<select name="alumni_wali" class="form-control" id="mySelectWali" onchange="myFunctionWali()">
											<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Ya' => 'Ya',
													'Tidak' => 'Tidak',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == 1) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row" id="showAlumniWali" style='visibility:hidden'>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="stambuk_wali">Stambuk</label>
										<input type="number" name="stambuk_wali" value="<?php echo ($this->input->post('stambuk_wali') ? $this->input->post('stambuk_wali') : $siswa['stambuk_wali']); ?>" class="form-control" id="stambuk_wali" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="tahun_lulus_wali">Tahun Lulus</label>
										<input type="date" name="tahun_lulus_wali" value="<?php echo ($this->input->post('tahun_lulus_wali') ? $this->input->post('tahun_lulus_wali') : $siswa['tahun_lulus_wali']); ?>" class="form-control" id="tahun_lulus_wali" />
									</div>
								</div>	
							</div>
						</div>
						<div class="tab-pane fade" id="pills-data-fisik" role="tabpanel" aria-labelledby="pills-data-fisik-tab">
							<h3 class="text-info font-weight-bold">Data Fisik Santri</h3>
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label for="tinggi_badan">Tinggi Badan (Centimetr)</label>
										<input type="text" name="tinggi_badan" value="<?php echo ($this->input->post('tinggi_badan') ? $this->input->post('tinggi_badan') : $siswa['tinggi_badan']); ?>" class="form-control" id="tinggi_badan" />
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="berat_badan">Berat Badan (Kilogram)</label>
										<input type="text" name="berat_badan" value="<?php echo ($this->input->post('berat_badan') ? $this->input->post('berat_badan') : $siswa['berat_badan']); ?>" class="form-control" id="berat_badan" />
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="khitan">Khitan</label>
										<div>
											<select name="khitan" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Sudah' => 'Sudah',
													'Belum' => 'Belum',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['khitan']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="alergi">Golongan Darah</label>
										<div>
											<select name="gol_darah" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'A' => 'A',
													'B' => 'B',
													'O' => 'O',
													'AB' => 'AB',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['gol_darah']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="penglihatan_mata">Penglihatan Mata</label>
										<div>
											<select name="penglihatan_mata" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Baik' => 'Baik',
													'Sedang' => 'Sedang',
													'Kurang' => 'Kurang',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['penglihatan_mata']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="pakai_kacamata">Pakai Kacamata</label>
										<div>
											<select name="pakai_kacamata" class="form-control" id="">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Ya' => 'Ya',
													'Tidak' => 'Tidak',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['pakai_kacamata']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="kacamata_tahun">Dari Tahun</label>
										<input type="date" name="kacamata_tahun" value="<?php echo ($this->input->post('alergi_dari_tahun') ? $this->input->post('alergi_dari_tahun') : $siswa['alergi_dari_tahun']); ?> "class="form-control" id="alergi_dari_tahun" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="pendengaran_telinga">Pendengaran Telinga</label>
										<div>
											<select name="pendengaran_telinga" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Baik' => 'Baik',
													'Sedang' => 'Sedang',
													'Kurang' => 'Kurang',
												);

													foreach ($aktif_values as $value => $display_text) {
														// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
														$selected = ($value == $siswa['pendengaran_telinga']) ? ' selected="selected"' : "";

														echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
														?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="operasi">Operasi</label>
										<div>
											<select name="operasi" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Pernah' => 'Pernah',
													'Tidak Pernah' => 'Tidak Pernah',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['operasi']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="sebab_operasi">Pernah, sebab</label>
										<input type="text" name="sebab_operasi" value="<?php echo ($this->input->post('sebab_operasi') ? $this->input->post('sebab_operasi') : $siswa['sebab_operasi']); ?>" class="form-control" id="sebab_operasi" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kecelakaan">Kecelakaan</label>
										<div>
											<select name="kecelakaan" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Pernah' => 'Pernah',
													'Tidak Pernah' => 'Tidak Pernah',
												);

													foreach ($aktif_values as $value => $display_text) {
														// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
														$selected = ($value == $siswa['kecelakaan']) ? ' selected="selected"' : "";

														echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
														?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<label for="alergi">Alergi</label>
										<div>
											<select name="alergi" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Ada' => 'Ada',
													'Tidak Ada' => 'Tidak Ada',
												);

												foreach ($aktif_values as $value => $display_text) {
														// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
														$selected = ($value == $siswa['alergi']) ? ' selected="selected"' : "";

														echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>	
								<div class="col-sm-2">
									<div class="form-group">
										<label for="alergi_dari_tahun">Dari Tahun</label>
										<input type="text" name="alergi_dari_tahun" value="<?php echo ($this->input->post('alergi_dari_tahun') ? $this->input->post('alergi_dari_tahun') : $siswa['alergi_dari_tahun']); ?> "class="form-control" id="alergi_dari_tahun" />
									</div>
								</div>
							</div>	
							<div class="row">
							<div class="col-sm-4">
									<div class="form-group">
										<label for="jenis_alergi">Jenis Alergi</label>
										<input type="text" name="jenis_alergi" value="<?php echo ($this->input->post('jenis_alergi') ? $this->input->post('jenis_alergi') : $siswa['jenis_alergi']); ?> "class="form-control" id="jenis_alergi" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kelainan_fisik">Kelainan Fisik</label>
										<input type="text" name="kelainan_fisik" value="<?php echo ($this->input->post('kelainan_fisik') ? $this->input->post('kelainan_fisik') : $siswa['kelainan_fisik']); ?>" class="form-control" id="kelainan_fisik" />
									</div>
								</div>
							</div>	
							<h3 class="text-info font-weight-bold">Kondisi Lingkungan Rumah</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kondisi_ekonomi">Kondisi Ekonomi Keluarga</label>
										<div>
											<select name="kondisi_ekonomi" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Mampu' => 'Mampu',
													'Cukup' => 'Cukup',
													'Kurang' => 'Kurang',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['kondisi_ekonomi']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="letak_rumah">Letak Rumah Dekat dengan</label>
										<input type="text" name="letak_rumah" value="<?php echo ($this->input->post('letak_rumah') ? $this->input->post('letak_rumah') : $siswa['letak_rumah']); ?> "class="form-control" id="letak_rumah" />
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="situasi_rumah">Situasi Rumah</label>
										<div>
											<select name="situasi_rumah" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Perkotaan' => 'Perkotaan',
													'Perdesaan' => 'Perdesaan',
													'Perkampungan' => 'Perkampungan',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['situasi_rumah']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kondisi_rumah">Kondisi Pendidikan Rumah</label>
										<div>
											<select name="kondisi_rumah" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Ketat' => 'Ketat',
													'Sedang' => 'Sedang',
													'Bebas' => 'Bebas',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['kondisi_rumah']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="situasi_kehidupan_beragama">Situasi Kehidupan Beragama</label>
										<div>
											<select name="situasi_kehidupan_beragama" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Baik' => 'Baik',
													'Sedang' => 'Sedang',
													'Kurang' => 'Kurang',
												);

												foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['situasi_kehidupan_beragama']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane fade" id="pills-penyakit" role="tabpanel" aria-labelledby="pills-penyakit-tab">
							<h3 class="text-info font-weight-bold">Penyakit Yang Pernah Diderita</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="sakit_tahun">Tahun</label>
										<input type="text" name="sakit_tahun" value="<?php echo ($this->input->post('sakit_tahun') ? $this->input->post('sakit_tahun') : $siswa['sakit_tahun']); ?>" class="form-control" id="sakit_tahun" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="sakit_nama">Nama Penyakit</label>
										<input type="text" name="sakit_nama" value="<?php echo ($this->input->post('sakit_nama') ? $this->input->post('sakit_nama') : $siswa['sakit_nama']); ?>" class="form-control" id="sakit_nama" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="sakit_kriteria">Termasuk Penyakit</label>
										<div>
											<select name="sakit_kriteria" class="form-control">
												<option value="">Select</option>
												<?php
												$aktif_values = array(
													'Kronis' => 'Kronis',
													'Tidak Kronis' => 'Tidak Kronis',
												);

													foreach ($aktif_values as $value => $display_text) {
														// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
														$selected = ($value == $siswa['sakit_kriteria']) ? ' selected="selected"' : "";

														echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
								<div class="form-group">
									<label for="sakit_menular">Termasuk Menular</label>
									<div>
										<select name="sakit_menular" class="form-control">
											<option value="">Select</option>
											<?php
											$aktif_values = array(
												'Menular' => 'Menular',
												'Tidak Menular' => 'Tidak Menular',
											);

											foreach ($aktif_values as $value => $display_text) {
													// $selected = ($value == $this->input->post('aktif')) ? ' selected="selected"' : "";
													$selected = ($value == $siswa['sakit_menular']) ? ' selected="selected"' : "";

													echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="sakit_keterangan">Keterangan</label>
										<input type="text" name="sakit_keterangan" value="<?php echo ($this->input->post('sakit_keterangan') ? $this->input->post('sakit_keterangan') : $siswa['sakit_keterangan']); ?>" class="form-control" id="sakit_keterangan" />
									</div>
								</div>	
							</div>
						</div>
						<div class="tab-pane fade" id="pills-kecakapan" role="tabpanel" aria-labelledby="pills-kecakapan-tab">
							<h3 class="text-info font-weight-bold">Kecakapan Khusus</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="bidang_studi">Bidang Studi</label>
										<input type="text" name="bidang_studi" value="<?php echo ($this->input->post('bidang_studi') ? $this->input->post('bidang_studi') : $siswa['bidang_studi']); ?>" class="form-control" id="bidang_studi" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="olah_raga">Olahraga</label>
										<input type="text" name="olah_raga" value="<?php echo ($this->input->post('olah_raga') ? $this->input->post('olah_raga') : $siswa['olah_raga']); ?>" class="form-control" id="olah_raga" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kesenian">Kesenian</label>
										<input type="text" name="kesenian" value="<?php echo ($this->input->post('kesenian') ? $this->input->post('kesenian') : $siswa['kesenian']); ?>" class="form-control" id="kesenian" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="keterampilan">Keterampilan</label>
										<input type="text" name="keterampilan" value="<?php echo ($this->input->post('keterampilan') ? $this->input->post('keterampilan') : $siswa['keterampilan']); ?>" class="form-control" id="keterampilan" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4"> 
									<div class="form-group">
										<label for="lain_lain">Lain-lain</label>
										<input type="text" name="lain_lain" value="<?php echo ($this->input->post('lain_lain') ? $this->input->post('lain_lain') : $siswa['lain_lain']); ?>" class="form-control" id="lain_lain" />
									</div>
								</div>
							</div>
							<h3 class="text-info font-weight-bold">Aktifitas Ekstrakulikuler Yang Diikuti Di Pondok</h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="klub_olah_raga">Klub Olah Raga</label>
										<input type="text" name="klub_olah_raga" value="<?php echo ($this->input->post('klub_olah_raga') ? $this->input->post('klub_olah_raga') : $siswa['klub_olah_raga']); ?>" class="form-control" id="klub_olah_raga" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kursus_bahasa">Kursus Bahasa</label>
										<input type="text" name="kursus_bahasa" value="<?php echo ($this->input->post('kursus_bahasa') ? $this->input->post('kursus_bahasa') : $siswa['kursus_bahasa']); ?>" class="form-control" id="kursus_bahasa" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="kursus_kesenian">Kursus Kesenian</label>
										<input type="text" name="kursus_kesenian" value="<?php echo ($this->input->post('kursus_kesenian') ? $this->input->post('kursus_kesenian') : $siswa['kursus_kesenian']); ?>" class="form-control" id="kursus_kesenian" />
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="ketermpilan_extra">Keterampilan</label>
										<input type="text" name="ketermpilan_extra" value="<?php echo ($this->input->post('ketermpilan_extra') ? $this->input->post('ketermpilan_extra') : $siswa['ketermpilan_extra']); ?>" class="form-control" id="ketermpilan_extra" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label for="asisten_bagian">Asisten Bagian</label>
										<input type="text" name="asisten_bagian" value="<?php echo ($this->input->post('asisten_bagian') ? $this->input->post('asisten_bagian') : $siswa['asisten_bagian']); ?>" class="form-control" id="asisten_bagian" />
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?= base_url('siswa'); ?>" class='btn btn-secondary'>Batal</a>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Edit Data Siswa</h3>
				</div>
				<div class="card-body">
					<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-data-saudara-tab" data-toggle="pill" href="#pills-data-saudara" role="tab" aria-controls="pills-data-saudara" aria-selected="true">DATA SAUDARA SISWA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-data-prestasi-tab" data-toggle="pill" href="#pills-data-prestasi" role="tab" aria-controls="pills-data-prestasi" aria-selected="false">DATA PRESTASI DI LUAR PONDOK</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-data-prestasi-pondok-tab" data-toggle="pill" href="#pills-data-prestasi-pondok" role="tab" aria-controls="pills-data-prestasi-pondok" aria-selected="false">DATA PRESTASI DALAM PONDOK</a>
					</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-data-saudara" role="tabpanel" aria-labelledby="pills-data-saudara">
							<!-- baru -->
							<div class="row">
								<div class="col-5">
									<div class="card-body">
										<form method="post" action="<?php echo base_url("siswa/input_data_saudara"); ?>">
											<!-- Buat tombol untuk menabah form data -->
											<button type="button" class="btn btn-primary" id="btn-tambah-form">Tambah Data Form</button>
											<button type="button" class="btn btn-primary" id="btn-reset-form">Reset Form</button><br><br>
											
											<br>
											<b>Data ke 1 :</b>
												<table>
													<tr>
														<td style="width: 300px;">Nama</td>
														<td style="width: 500px;"><input class="form-control" type="text" name="nama[]" required></td>
													</tr>
													<tr>
														<td>Jenis Kelamin</td>
														<td>
															<select class="form-control" name="kelamin[]" required>
																<option value="">Pilih</option>
																<option value="L">Laki-laki</option>
																<option value="P">Perempuan</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>Umur</td>
														<td><input class="form-control" type="number" name="umur[]" required></td>
													</tr>
													<tr>
														<td>Pendidikan Terakhir</td>
														<td>
															<select class="form-control" name="pend_terakhir[]" required>
																<option value="">Pilih</option>
																<option value="Belum_sekolah">Belum Sekolah</option>
																<option value="TK/Sederajat">TK/Sederajat</option>
																<option value="SD/Sederajat">SD/Sederajat</option>
																<option value="SMP/Sederajat">SMP/Sederajat</option>
																<option value="SMA/Sederajat">SMA/Sederajat</option>
																<option value="Diploma">Diploma</option>
																<option value="S1">S1</option>
																<option value="S2">S2</option>
																<option value="S3">S3</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td><input class="form-control" type="text" name="pekerjaan[]" required></td>
													</tr>
													<tr>
														<td>Status Hubungan</td>
														<td><input class="form-control" type="text" name="status[]" required></td>
													</tr>
												</table>
											<br><br>
											<div id="insert-form"></div>

											<!-- Kita buat textbox untuk id siswa -->
											<input type="hidden" name="stambuk" value="<?php echo $siswa['nis']?>">
											
											<div class="col-sm-offset-4 col-sm-8">
												<input class="btn btn-primary" type="submit" value="Simpan">
											</div>
											<!-- <input type="submit" value="Simpan"> -->
										</form>
										
										<!-- Kita buat textbox untuk menampung jumlah data form -->
										<input type="hidden" id="jumlah-form" value="1">

									</div>
								</div>
								<div class="col-7">
									<div class="card-body">
										<!-- flash data -->
										<?php if ($this->session->flashdata('hapus')) { ?>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('hapus'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<?php if ($this->session->flashdata('add')) { ?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('add'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<div class="table-responsive">
											<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
												<thead class="thead-dark">
													<tr>
														<th>No</th>
														<th>Nama Lengkap</th>
														<th>Jenis Kelamin</th>
														<th>Umur</th>
														<th>Pendidikan Terakhir</th>
														<th>Pekerjaan</th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>

												<?php $no=1; foreach ($saudara_siswa as $m) { ?>
													<tr>
														<td><?php echo $no++; ?></td>
														<td><?php echo $m['nama']; ?></td>
														<td><?php echo ($m['kelamin'] == "L" ? '<span class="badge badge-primary">Laki-laki</span>' : '<span class="badge badge-danger">Perempuan</span>'); ?></td>
														<td><?php echo $m['umur']; ?></td>
														<td><?php echo $m['pend_terakhir']; ?></td>
														<td><?php echo $m['pekerjaan']; ?></td>
														<td><?php echo $m['status']; ?></td>
														<td>
															<a href="<?php echo site_url('siswa/delete_saudara/' . $m['id']); ?>" class="btn btn-danger btn-sm">
																<span class="icon text-white-50">
																	<input type="hidden"name="id_siswa" value="<?php echo $siswa['id']?>">
																	<i class="fas fa-trash"></i>
																</span>
															</a>
														</td>
													</tr>
												<?php } ?>
											</table>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-data-prestasi" role="tabpanel" aria-labelledby="pills-data-prestasi">
							<!-- baru -->
							<div class="row">
								<div class="col-5">
									<div class="card-body">
										<form method="post" action="<?php echo base_url("siswa/input_data_saudara"); ?>">
											<!-- Buat tombol untuk menabah form data -->
											<button type="button" class="btn btn-primary" id="btn-tambah-form">Tambah Data Form</button>
											<button type="button" class="btn btn-primary" id="btn-reset-form">Reset Form</button><br><br>
											
											<br>
											<b>Data ke 1 :</b>
												<table>
													<tr>
														<td style="width: 300px;">Nama</td>
														<td style="width: 500px;"><input class="form-control" type="text" name="nama[]" required></td>
													</tr>
													<tr>
														<td>Jenis Kelamin</td>
														<td>
															<select class="form-control" name="kelamin[]" required>
																<option value="">Pilih</option>
																<option value="L">Laki-laki</option>
																<option value="P">Perempuan</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>Umur</td>
														<td><input class="form-control" type="number" name="umur[]" required></td>
													</tr>
													<tr>
														<td>Pendidikan Terakhir</td>
														<td>
															<select class="form-control" name="pend_terakhir[]" required>
																<option value="">Pilih</option>
																<option value="Belum_sekolah">Belum Sekolah</option>
																<option value="TK/Sederajat">TK/Sederajat</option>
																<option value="SD/Sederajat">SD/Sederajat</option>
																<option value="SMP/Sederajat">SMP/Sederajat</option>
																<option value="SMA/Sederajat">SMA/Sederajat</option>
																<option value="Diploma">Diploma</option>
																<option value="S1">S1</option>
																<option value="S2">S2</option>
																<option value="S3">S3</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>Pekerjaan</td>
														<td><input class="form-control" type="text" name="pekerjaan[]" required></td>
													</tr>
													<tr>
														<td>Status Hubungan</td>
														<td><input class="form-control" type="text" name="status[]" required></td>
													</tr>
												</table>
											<br><br>
											<div id="insert-form"></div>

											<!-- Kita buat textbox untuk id siswa -->
											<input type="hidden" name="stambuk" value="<?php echo $siswa['nis']?>">
											
											<div class="col-sm-offset-4 col-sm-8">
												<input class="btn btn-primary" type="submit" value="Simpan">
											</div>
											<!-- <input type="submit" value="Simpan"> -->
										</form>
										
										<!-- Kita buat textbox untuk menampung jumlah data form -->
										<input type="hidden" id="jumlah-form" value="1">

									</div>
								</div>
								<div class="col-7">
									<div class="card-body">
										<!-- flash data -->
										<?php if ($this->session->flashdata('hapus')) { ?>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('hapus'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<?php if ($this->session->flashdata('add')) { ?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('add'); ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php } ?>
										<div class="table-responsive">
											<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
												<thead class="thead-dark">
													<tr>
														<th>No</th>
														<th>Nama Lengkap</th>
														<th>Jenis Kelamin</th>
														<th>Umur</th>
														<th>Pendidikan Terakhir</th>
														<th>Pekerjaan</th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>

												<?php $no=1; foreach ($saudara_siswa as $m) { ?>
													<tr>
														<td><?php echo $no++; ?></td>
														<td><?php echo $m['nama']; ?></td>
														<td><?php echo ($m['kelamin'] == "L" ? '<span class="badge badge-primary">Laki-laki</span>' : '<span class="badge badge-danger">Perempuan</span>'); ?></td>
														<td><?php echo $m['umur']; ?></td>
														<td><?php echo $m['pend_terakhir']; ?></td>
														<td><?php echo $m['pekerjaan']; ?></td>
														<td><?php echo $m['status']; ?></td>
														<td>
															<a href="<?php echo site_url('siswa/delete_saudara/' . $m['id']); ?>" class="btn btn-danger btn-sm">
																<span class="icon text-white-50">
																	<input type="hidden"name="id_siswa" value="<?php echo $siswa['id']?>">
																	<i class="fas fa-trash"></i>
																</span>
															</a>
														</td>
													</tr>
												<?php } ?>
											</table>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-data-prestasi-pondok" role="tabpanel" aria-labelledby="pills-data-prestasi-pondok">

						</div>
					</div>
				<div>
				<div class="card-footer">
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
							<a href="<?= base_url('siswa'); ?>" class='btn btn-danger'>Batal</a>
						</div>
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

<!-- <?php echo json_encode($aktif_values_ayah); ?>; -->
	<!-- var e = document.getElementById("pilih_alumni_ayah");
	var value = e.value;
	var text = e.options[e.selectedIndex].text; -->
	

	<script language="javascript">
	
	function myFunctionAyah() {
		var value = document.getElementById("mySelectAyah").value;

		if(value == "Ya") {
			document.getElementById("showAlumniAyah").style.visibility="visible";
		}
		if(value == "Tidak") {
			document.getElementById("showAlumniAyah").style.visibility="hidden";
		}
		if(value == "") {
			document.getElementById("showAlumniAyah").style.visibility="hidden";
		}

	}

	function myFunctionIbu() {
		var x = document.getElementById("mySelectIbu").value;

		if(x == "Ya") {
			document.getElementById("showAlumniIbu").style.visibility="visible";
		}
		if(x == "Tidak") {
			document.getElementById("showAlumniIbu").style.visibility="hidden";
		}
		if(x == "") {
			document.getElementById("showAlumniIbu").style.visibility="hidden";
		}

	}

	function myFunctionWali() {
		var x = document.getElementById("mySelectWali").value;

		if(x == "Ya") {
			document.getElementById("showAlumniWali").style.visibility="visible";
		}
		if(x == "Tidak") {
			document.getElementById("showAlumniWali").style.visibility="hidden";
		}
		if(x == "") {
			document.getElementById("showAlumniWali").style.visibility="hidden";
		}

	}
</script>

<!-- SCRIPT SAUDARA -->
<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
			
			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append("<b>Data ke " + nextform + " :</b>" +

				"<table>" +
				"<tr>" +
				"<td style='width: 300px;'>Nama</td>" +
				"<td style='width: 500px;'><input class='form-control' type='text' name='nama[]' required></td>" +
				"</tr>" +
				"<tr>" +
				"<td>Jenis Kelamin</td>" +
				"<td>" +
				"<select class='form-control' name='kelamin[]' required>" +
				"<option value=''>Pilih</option>" +
				"<option value='L'>Laki-laki</option>" +
				"<option value='P'>Perempuan</option>" +
				"</select>" +
				"</td>" +
				"</tr>" +
				"<tr>" +
				"<td>Umur</td>" +
				"<td><input class='form-control' type='number' name='umur[]' required></td>" +
				"</tr>" +
				"<tr>" +
				"<td>Pendidikan Terakhir</td>" +
				"<td>" +
				"<select class='form-control' name='pend_terakhir[]' required>" +
				"<option value=''>Pilih</option>" +
				"<option value='SD/Sederajat'>SD/Sederajat</option>" +
				"<option value='SMP/Sederajat'>SMP/Sederajat</option>" +
				"<option value='SMA/Sederajat'>SMA/Sederajat</option>" +
				"<option value='Diploma'>Diploma</option>" +
				"<option value='S1'>S1</option>" +
				"<option value='S2'>S2</option>" +
				"<option value='S3'>S3</option>" +
				"</select>" +
				"</td>" +
				"</tr>" +
				"<tr>" +
				"<td>Pekerjaan</td>" +
				"<td><input class='form-control' type='text' name='pekerjaan[]' required></td>" +
				"</tr>" +
				"<tr>" +
				"<td>Status Hubungan</td>" +
				"<td><input class='form-control' type='text' name='status[]' required></td>" +
				"</tr>" +
				"</table>" +
				"<br><br>");
			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
		});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
</script>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>