<!-- Begin Page Content -->
<div class="container-fluid">

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
			<div class="card shadow mb-4 position-relative">
					<div class="card-body">
						<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-individu-tab" data-toggle="pill" href="#pills-individu" role="tab" aria-controls="pills-individu" aria-selected="true">DETAIL DATA INDIVIDU SANTRI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-ayah-tab" data-toggle="pill" href="#pills-ayah" role="tab" aria-controls="pills-ayah" aria-selected="false">DETAIL DATA AYAH SANTRI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-ibu-tab" data-toggle="pill" href="#pills-ibu" role="tab" aria-controls="pills-ibu" aria-selected="false">DETAIL DATA IBU SANTRI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-wali-tab" data-toggle="pill" href="#pills-wali" role="tab" aria-controls="pills-wali" aria-selected="false">DETAIL DATA WALI SANTRI (JIKA DIWAKILKAN)</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-fisik-tab" data-toggle="pill" href="#pills-fisik" role="tab" aria-controls="pills-fisik" aria-selected="false">DATA FISIK SANTRI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-bakat-tab" data-toggle="pill" href="#pills-bakat" role="tab" aria-controls="pills-bakat" aria-selected="false">DATA MINAT DAN BAKAT SANTRI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-saudara" data-toggle="pill" href="#pills-saudara" role="tab" aria-controls="pills-saudara" aria-selected="false">DATA SAUDARA SANTRI</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-individu" role="tabpanel" aria-labelledby="pills-individu-tab">
								<div class='col-12'>
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Individu Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
											<tr>
												<th style="width: 12rem;">Status</th>
												<td><?php echo ($s['aktif'] == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
											</tr>
											<tr>
												<th>Stambuk</th>
												<td><?php echo $detail->nis ?></td>
											</tr>
											<tr>
												<th>Tahun Masuk Gontor</th>
												<td><?php echo $detail->tahun_masuk ?></td>
											</tr>
											<tr>
												<th>Nama Lengkap</th>
												<td><?php echo $detail->nama_lengkap ?></td>
											</tr>
											<tr>
												<th>Nama Arab</th>
												<td><?php echo $detail->nama_arab ?></td>
											</tr>
											<tr>
												<th>Nama Panggilan</th>
												<td><?php echo $detail->nama_panggilan ?></td>
											</tr>
											<tr>
												<th>Nomor Induk Siswa Nasional (NISN)</th>
												<td><?php echo $detail->nisn ?></td>
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
												<th>Nomor Induk Kependudukan</th>
												<td><?php echo $detail->nik ?></td>
											</tr>
											<tr>
												<th>Nomor BPJS</th>
												<td><?php echo $detail->no_kis ?></td>
											</tr>
											<tr>
												<th>Tempat Lahir</th>
												<td><?php echo $detail->tempat_lahir ?></td>
											</tr>
											<tr>
												<th>Tanggal Lahir</th>
												<td><?php echo tanggal_indo ($detail->tanggal_lahir) ?></td>
											</tr>
											<tr>
												<th>Kewarganegaraan</th>
												<td><?php echo $detail->kewarganegaraan ?></td>
											</tr>
											<tr>
												<th>Suku</th>
												<td><?php echo $detail->suku ?></td>
											</tr>
											<tr>
												<th>Alamat</th>
												<td><?php echo $detail->alamat ?></td>
											</tr>
											<tr>
												<th>Desa / Kelurahan</th>
												<td><?php echo $detail->kelurahan ?></td>
											</tr>
											<tr>
												<th>Kecamatan</th>
												<td><?php echo $detail->kecamatan ?></td>
											</tr>
											<tr>
												<th>Kabupaten / Kota</th>
												<td><?php echo $detail->kota_kab ?></td>
											</tr>
											<tr>
												<th>Provinsi</th>
												<td><?php echo $detail->provinsi ?></td>
											</tr>
											<tr>
												<th>Dibesarkan Di</th>
												<td><?php echo $detail->dibesarkan_di ?></td>
											</tr>
											<tr>
												<th>Kode Pos</th>
												<td><?php echo $detail->kode_pos ?></td>
											</tr>
											<tr>
												<th>Alamat Lengkap</th>
												<td><?php echo alamat_lengkap ($detail->kelurahan, $detail->kecamatan, $detail->kota_kab, $detail->provinsi, $detail->kode_pos)?></td>
											</tr>
										</table>
									</div>
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Kontak Santri</h3>
									</div>
									<div>
										<table class="table table-bordered table-striped">
											<tr>
												<th>Nomor Telpon</th>
												<tb><?php echo $detail->no_telp ?></tb>
											</tr>
											<tr>
												<th>Facebook</th>
												<tb><?php echo $detail->facebook ?></tb>
											</tr>
											<tr>
												<th>Email</th>
												<tb><?php echo $detail->email ?></tb>
											</tr>
											<tr>
												<th>Twitter</th>
												<tb><?php echo $detail->twitter ?></tb>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-ayah" role="tabpanel" aria-labelledby="pills-ayah-tab">
								<div class='col-12'>
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Ayah Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
											<tr>
												<th style="width: 12rem;">Nama Lengkap</th>
												<td><?php echo $detail->ayah ?></td>
											</tr>
											<tr>
												<th>Pekerjaan</th>
												<td><?php echo $detail->pekerjaan_ayah ?></td>
											</tr>
											<tr>
												<th>Agama</th>
												<td><?php echo $detail->agama_ayah ?></td>
											</tr>
											<tr>
												<th>Usia</th>
												<td><?php echo $detail->usia_ayah ?></td>
											</tr>
											<tr>
												<th>Pendidikan Terakhir</th>
												<td><?php echo $detail->pend_ayah ?></td>
											</tr>
											<tr>
												<th>Kewarganegaraan</th>
												<td><?php echo $detail->kewarga_ayah ?></td>
											</tr>
											<tr>
												<th>Suku</th>
												<td><?php echo $detail->suku_ayah ?></td>
											</tr>
											<tr>
												<th>Organisasi Masyarakat</th>
												<td><?php echo $detail->ormas_ayah ?></td>
											</tr>
											<tr>
												<th>Organisasi Politik</th>
												<td><?php echo $detail->orpol_ayah ?></td>
											</tr>
											<tr>
												<th>Kedudukan Di Masyarakat</th>
												<td><?php echo $detail->kedudukan_ayah ?></td>
											</tr>
											<tr>
												<th>Nomor Telefon Ayah</th>
												<td><?php echo $detail->telp_ayah ?></td>
											</tr>
											<tr>
												<th>Alumni Gontor</th>
												<td id="alumniAyah"><?php echo $detail->alumni_ayah ?></td>
											</tr>
											<tr id="showAlumniAyah">
												<th>Stambuk</th>
												<td><?php echo $detail->stambuk_ayah ?></td>
											</tr>
											<tr id="showAlumniAyah">
												<th>Tahun Lulus</th>
												<td><?php echo $detail->tahun_lulus_ayah ?></td>
											</tr>
										</Table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-ibu" role="tabpanel" aria-labelledby="pills-ibu-tab">
								<div class="col-12">
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Ibu Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
											<tr>
												<th style="width: 12rem;">Nama Ibu</th>
												<td><?php echo $detail->ibu ?></td>
											</tr>
											<tr>
												<th style="width: 12rem;">Usia</th>
												<td><?php echo $detail->usia_ibu ?></td>
											</tr>
											<tr>
												<th>Pekerjaan</th>
												<td><?php echo $detail->pekerjaan_ibu ?></td>
											</tr>
											<tr>
												<th>Agama</th>
												<td><?php echo $detail->agama_ibu ?></td>
											</tr>
											<tr>
												<th>Pendidikan Terakhir</th>
												<td><?php echo $detail->pend_ibu ?></td>
											</tr>
											<tr>
												<th>Kewarganegaraan</th>
												<td><?php echo $detail->kewarga_ibu ?></td>
											</tr>
											<tr>
												<th>Suku</th>
												<td><?php echo $detail->suku_ibu ?></td>
											</tr>
											<tr>
												<th>Organisasi Masyarakat</th>
												<td><?php echo $detail->ormas_ibu ?></td>
											</tr>
											<tr>
												<th>Organisasi Politik</th>
												<td><?php echo $detail->orpal_ibu ?></td>
											</tr>
											<tr>
												<th>Kedudukan Di Masyarakat</th>
												<td><?php echo $detail->kedudukan_ibu ?></td>
											</tr>
											<tr>
												<th>Alumni Gontor</th>
												<td><?php echo $detail->alumni_ibu ?></td>
											</tr>
											<tr>
												<th>Nomor Telefon Ibu</th>
												<td><?php echo $detail->telp_ibu ?></td>
											</tr>
											<tr>
												<th>Yang Membiayai</th>
												<td><?php echo $detail->yang_membiayai ?></td>
											</tr>
											<tr>
												<th>Minimal Membiayai</th>
												<td><?php echo $detail->minimal_membiayai ?></td>
											</tr>
											<tr>
												<th>Maksimal Membiayai</th>
												<td><?php echo $detail->maksimal_membiayai ?></td>
											</tr>
										</Table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-wali" role="tabpanel" aria-labelledby="pills-wali-tab">
								<div class="col-12">
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Wali Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
											<tr>
												<th style="width: 12rem;">Nama Wali</th>
												<td><?php echo $detail->wali ?></td>
											</tr>
											<tr>
												<th>Pekerjaan</th>
												<td><?php echo $detail->pekerjaan_wali ?></td>
											</tr>
											<tr>
												<th>Agama</th>
												<td><?php echo $detail->agama_wali ?></td>
											</tr>
											<tr>
												<th>Pendidikan Terakhir</th>
												<td><?php echo $detail->pend_wali ?></td>
											</tr>
											<tr>
												<th>Kewarganegaraan</th>
												<td><?php echo $detail->kewarga_wali ?></td>
											</tr>
											<tr>
												<th>Suku</th>
												<td><?php echo $detail->suku_wali ?></td>
											</tr>
											<tr>
												<th>Organisasi Masyarakat</th>
												<td><?php echo $detail->ormas_wali ?></td>
											</tr>
											<tr>
												<th>Organisasi Politik</th>
												<td><?php echo $detail->orpol_wali ?></td>
											</tr>
											<tr>
												<th>Kedudukan Di Masyarakat</th>
												<td><?php echo $detail->kedudukan_wali ?></td>
											</tr>
											<tr>
												<th>Alumni Gontor</th>
												<td><?php echo $detail->alumni_wali ?></td>
											</tr>
											<tr>
												<th>Nomor Telefon Wali</th>
												<td><?php echo $detail->telp_wali ?></td>
											</tr>
										</Table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-fisik" role="tabpanel" aria-labelledby="pills-fisik-tab">
								<div class="col-12">
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Fisik Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
												<tr>
													<th style="width: 12rem;">Tinggi Badan</th>
													<td><?php echo $detail->tinggi_badan . ' Cm' ?></td>
												</tr>
												<tr>
													<th>Berat Badan</th>
													<td><?php echo $detail->berat_badan . ' Kg' ?></td>
												</tr>
												<tr>
													<th>Khitan</th>
													<td><?php echo $detail->khitan ?></td>
												</tr>
												<tr>
													<th>Golongan Darah</th>
													<td><?php echo $detail->gol_darah ?></td>
												</tr>
												<tr>
													<th>Kondisi Pendidikan Rumah</th>
													<td><?php echo $detail->kondisi_rumah ?></td>
												</tr>
												<tr>
													<th>Kondisi Ekonomi Keluarga</th>
													<td><?php echo $detail->kondisi_ekonomi ?></td>
												</tr>
												<tr>
													<th>Situasi Rumah</th>
													<td><?php echo $detail->situasi_rumah ?></td>
												</tr>
												<tr>
													<th>Letak Rumah Dekat dengan</th>
													<td><?php echo $detail->letak_rumah ?></td>
												</tr>
												<tr>
													<th>Penglihatan Mata</th>
													<td><?php echo $detail->penglihatan_mata ?></td>
												</tr>
												<tr>
													<th>Pakai Kacamata</th>
													<td><?php echo $detail->pakai_kacamata ?></td>
												</tr>
												<tr>
													<th>Pendengaran Telinga</th>
													<td><?php echo $detail->pendengaran_telinga ?></td>
												</tr>
												<tr>
													<th>Operasi</th>
													<td><?php echo $detail->operasi ?></td>
												</tr>
												<tr>
													<th>Kecelakaan</th>
													<td><?php echo $detail->kecelakaan ?></td>
												</tr>
												<tr>
													<th>Alergi</th>
													<td><?php echo $detail->alergi ?></td>
												</tr>
												<tr>
													<th>Kelainan Fisik</th>
													<td><?php echo $detail->kelainan_fisik ?></td>
												</tr>
												<tr>
													<th>Situasi Kehidupan Beragama</th>
													<td><?php echo $detail->situasi_kehidupan_beragama ?></td>
												</tr>
										</Table>
										<hr>
										<table class="table table-bordered table-striped">
												<thead><h5 class="text-info font-weight-bold">Penyakit Yang Pernah Diderita</h5> </thead>
												<tr>
													<th style="width: 12rem;">Tahun</th>
													<td><?php echo $detail->sakit_tahun ?></td>
												</tr>
												<tr>
													<th>Nama Penyakit</th>
													<td><?php echo $detail->sakit_nama ?></td>
												</tr>
												<tr>
													<th>Termasuk Penyakit</th>
													<td><?php echo $detail->sakit_kriteria ?></td>
												</tr>
												<tr>
													<th>Termasuk Menular</th>
													<td><?php echo $detail->sakit_menular ?></td>
												</tr>
												<tr>
													<th>Keterangan</th>
													<td><?php echo $detail->sakit_keterangan ?></td>
												</tr>
										</Table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-bakat" role="tabpanel" aria-labelledby="pills-bakat-tab">
								<div class="col-12">
									<div class="card-header py-3">
										<h3 class="m-0 font-weight-bold text-primary">Detail Data Minat Dan Bakat Santri</h3>
									</div>
									<div class="card-body">
										<table class="table table-bordered table-striped">
											<thead><h5 class="text-info font-weight-bold">Kecakapan Khusus</h5> </thead>
												<tr>
													<th style="width: 12rem;">Bidang Studi</th>
													<td><?php echo $detail->bidang_studi ?></td>
												</tr>
												<tr>
													<th>Olahraga</th>
													<td><?php echo $detail->olah_raga ?></td>
												</tr>
												<tr>
													<th>Kesenian</th>
													<td><?php echo $detail->kesenian ?></td>
												</tr>
												<tr>
													<th>Keterampilan</th>
													<td><?php echo $detail->keterampilan ?></td>
												</tr>
												<tr>
													<th>Lain-lain</th>
													<td><?php echo $detail->lain_lain ?></td>
												</tr>
											</Table>
											<hr>
											<table class="table table-bordered table-striped">
												<thead><h5 class="text-info font-weight-bold">Aktifitas Ekstrakulikuler Yang Diikuti Di Pondok</h5> </thead>
												<tr>
													<th style="width: 12rem;">Klub Olah Raga</th>
													<td><?php echo $detail->klub_olah_raga ?></td>
												</tr>
												<tr>
													<th>Kursus Bahasa</th>
													<td><?php echo $detail->kursus_bahasa ?></td>
												</tr>
												<tr>
													<th>Kursus Kesenian</th>
													<td><?php echo $detail->kursus_kesenian ?></td>
												</tr>
												<tr>
													<th>Keterampilan</th>
													<td><?php echo $detail->ketermpilan_extra ?></td>
												</tr>
												<tr>
													<th>Asisten Bagian</th>
													<td><?php echo $detail->asisten_bagian ?></td>
												</tr>
										</Table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-saudara" role="tabpanel" aria-labelledby="pills-saudara-tab">
								<div class="table-responsive">
									<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
										<thead class="thead-dark">
											<tr>
												<th>Aktif</th>
												<th>Stambuk</th>
												<th>Nama Lengkap</th>
												<th>Kelas</th>
												<th>Rayon</th>
												<th>Konsulat</th>
												<th>Actions</th>
											</tr>
										</thead>

										<?php foreach ($siswa as $m) { ?>
											<tr>
												<td><?php echo ($m['aktif'] == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'); ?></td>
												<td><?php echo $m['nis']; ?></td>
												<td><?php echo $m['nama_lengkap']; ?></td>
												<td><?php echo $m['kelas']; ?></td>
												<td><?php echo $m['rayon']; ?></td>
												<td><?php echo $m['konsul']; ?></td>
												<td>
													<a href="<?php echo site_url('siswa/detail/' . $m['id']); ?>" class="btn btn-info btn-sm">
														<span class="icon text-white-50">
															<i class="fas fa-search-plus"></i>
														</span>
													</a>
													<a href="<?php echo site_url('siswa/edit/' . $m['id']); ?>" class="btn btn-primary btn-sm">
														<span class="icon text-white-50">
															<i class="fas fa-edit"></i>
														</span>
													</a>
													<a href="<?php echo site_url('siswa/remove/' . $m['id']); ?>" class="btn btn-danger btn-sm">
														<span class="icon text-white-50">
															<i class="fas fa-trash"></i>
														</span>
													</a>
												</td>
											</tr>
										<?php } ?>
										<tfoot>
											<tr>
												<th>Aktif</th>
												<th>Stambuk</th>
												<th>Nama Lengkap</th>
												<th>Kelas</th>
												<th>Rayon</th>
												<th>Konsulat</th>
												<th>Actions</th>
											</tr>
										</tfoot>
									</table>
								</div>	
							</div>
						</div>
					</div>		
					<div class="col-sm-offset-4 col-sm-8">
						<a href="<?php echo site_url('siswa/edit/' . $s['nis']); ?>" class='btn btn-primary'>Edit</a>
						<a href="<?= base_url('siswa'); ?>" class='btn btn-danger'>Kembali</a>
					</div>
					<br>
				<br>
			</div>
		</div>
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
<script language="javascript">
	
		var value = document.getElementById("alumniAyah").echo;

		if(value == "Ya") {
			document.getElementById("showAlumniAyah").style.visibility="visible";
		}
		if(value == "Tidak") {
			document.getElementById("showAlumniAyah").style.visibility="hidden";
		}

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

</script>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>