<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/multi-select.css'); ?>">

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Input Riwayat Sakit Santri Massal</h3>
				</div>
				<?php echo form_open('bakes/riwayatsakit/simpan_massal', array("class" => "form-horizontal")); ?>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Penginput</label>
								<select name="penginput" id="penginput"  placeholder="Test" class="form-control" >
									<option value="">-Silahkan Pilih-</option>

									<optgroup label="Staf Bagian Kesehatan">
									<?php foreach ($stafbakes as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>

									<optgroup label="Kelas 6">
									<?php foreach ($stafbakeskelas6 as $row): ?>
                        
										<option value="<?php echo $row->id ?>"> <?php echo $row->nama ?> </option>

									<?php endforeach ?>
									
								</select>
							</div>
							<div class="form-group">
								<label for="">Jenis Penyakit</label>
								<select name="jenis_penyakit" id="jenis_penyakit" onchange="pilih_penyakit()" placeholder="Test" class="form-control" required>
									<option value="">-Silahkan Pilih-</option>

									<optgroup label="Biasa">
									<?php foreach ($sakitbiasa as $row): ?>
                        
										<option value="<?php echo $row->nama_penyakit ?>"> <?php echo $row->nama_penyakit ?> </option>

									<?php endforeach ?>
									
									<optgroup label="Sedang">
									<?php foreach ($sakitsedang as $row): ?>
                        
										<option value="<?php echo $row->nama_penyakit ?>"> <?php echo $row->nama_penyakit ?> </option>

									<?php endforeach ?>

									<optgroup label="Menular">
									<?php foreach ($sakitmenular as $row): ?>
                        
										<option value="<?php echo $row->nama_penyakit ?>"> <?php echo $row->nama_penyakit ?> </option>

									<?php endforeach ?>
									
								</select>
							</div>
							<div class="form-group">
								<label for="">Kategori Sakit</label>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori Penyakit" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="">Tindakan</label>
								<div class="form-group">
									<select name="tindakan" class="form-control" id="tindakan">
										<option value="">-Silahkan Pilih-</option>											
										<option value="Berobat">Berobat</option>
										<option value="Emergency 1">Emergency 1</option>
										<option value="Emergency 2">Emergency 2</option>
										<option value="Rumah Sakit">Rumah Sakit</option>
										<option value="Pulang Sementara">Pulang Sementara</option>
  									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="">Status</label>
								<div class="form-group">
									<select name="status" class="form-control">
										<option value="">Pilih</option>
										<?php
										$aktif_values = array(
											'1' => 'Masih Dirawat',
											'0' => 'Sudah Sembuh',
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
							<div class="form-group">
								<label for="">Keterangan</label>
								<div class="form-group">
									<input type="text" name="keterangan" class="form-control" id="keterangan" >
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="">Anggota Yang Melanggar</label>
								<select class='searchable' multiple='multiple' name='id_siswa[]' id='id_siswa' required>
									<?php foreach ($siswa as $m) { ?>
										<option value='<?= $m['id']; ?>'><?= $m['nis']; ?> - <?= $m['nama_lengkap']; ?> - <?= $m['kelas']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<button type="submit" class='btn btn-primary'>Simpan</button>
						<a href="<?= base_url('bakes/riwayatsakit') ?>" class='btn btn-secondary'>Batal</a>
					</div>
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

<script>
	function pilih_penyakit(){
		var jenis_penyakit = $("#jenis_penyakit").val();
		$.ajax({
			url:"<?php echo base_url() ?>bakes/riwayatsakit/fill_kategori_penyakit",
			data:"jenis_penyakit=" + jenis_penyakit ,
			method : 'post',
			dataType : 'json',
				success: function(data)
				{	$("#kategori").val(data.kategori);
				
				}
		});
	}
	$(function(){
		$(document).ready(function(){
	$('#jenis_penyakit').select2()
		});
	});
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
<script src="<?= base_url('assets/js/jquery.multi-select.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.quicksearch.js'); ?>"></script>


<script type="text/javascript">
	$('.searchable').multiSelect({
		selectableHeader: "<input type='text' class='form-control mb-2' autocomplete='off' placeholder='Cari Siswa'>",
		selectionHeader: "<input type='text' class='form-control mb-2' autocomplete='off' placeholder='Cari Siswa'>",
		afterInit: function(ms) {
			var that = this,
				$selectableSearch = that.$selectableUl.prev(),
				$selectionSearch = that.$selectionUl.prev(),
				selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
				selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

			that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
				.on('keydown', function(e) {
					if (e.which === 40) {
						that.$selectableUl.focus();
						return false;
					}
				});

			that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
				.on('keydown', function(e) {
					if (e.which == 40) {
						that.$selectionUl.focus();
						return false;
					}
				});
		},
		afterSelect: function() {
			this.qs1.cache();
			this.qs2.cache();
		},
		afterDeselect: function() {
			this.qs1.cache();
			this.qs2.cache();
		}
	});
</script>