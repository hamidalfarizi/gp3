<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/multi-select.css'); ?>">

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Input Pelanggaran Santri Massal</h3>
				</div>
				<?php echo form_open('pelanggaran/simpan_massal', array("class" => "form-horizontal")); ?>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Penghukum</label>
								<select name="penghukum" id="penghukum"  placeholder="Test" class="form-control" >
									<option value="">-Silahkan Pilih-</option>

									<optgroup label="Staf Pengasuhan Santri">
									<?php foreach ($penghukumpengasuhan as $row): ?>
                        
										<option value="<?php echo $row->nama_penghukum ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>

									<optgroup label="Keamanan Pusat">
									<?php foreach ($penghukumkeamanan as $row): ?>
                        
										<option value="<?php echo $row->nama_penghukum ?>"> <?php echo $row->nama_penghukum ?> </option>

									<?php endforeach ?>
									
								</select>
							</div>
							<div class="form-group">
								<label for="">Pelanggaran</label>
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
							</div>
							<div class="form-group">
								<label for="">Kategori Pelanggaran</label>
								<div class="form-group">
									<input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori Pelanggaran" readonly>
								</div>
							</div>
							<div class="form-group">
								<label for="">Hukuman</label>
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
										<optgroup label="Berat">
      										<option value="Panggilan Orang Tua/Wali">Panggilan Orang Tua/Wali</option>
      										<option value="Di Pindah">Di Pindah</option>
											<option value="Di Skorsing">Di Skorsing</option>
											<option value="Di Keleuarkan">Di Keluarkan</option>
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
										<option value='<?= $m['id']; ?>|<?= $m['nama_lengkap']; ?>'><?= $m['nama_lengkap']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="form-group">
						<button type="submit" class='btn btn-primary'>Simpan</button>
						<a href="<?= base_url('rombel') ?>" class='btn btn-secondary'>Batal</a>
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