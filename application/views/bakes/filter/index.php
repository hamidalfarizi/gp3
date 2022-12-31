<!-- Begin Page Content -->
<div class="container-fluid text-dark">
  
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Jenis Penyakit
                    <hr>
                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbykategori" method="POST" target='_blank'>
                    
                         <input type="hidden" name="nilaisakit" value="1">

                        Pilih Penyakit <br>
                        <select name="jenis_penyakit" id="jenis_penyakit" placeholder="Test" class="form-control">
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
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go" >
                    </form>
				</div>
            </div>
         </div>
    </div>

    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Filter Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Tindakan
                    <hr>

                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbykategori" method="POST" target='_blank'>
                    
                         <input type="hidden" name="nilaitindakan" value="1">

                         Pilih Hukuman <br>
                         <select name="tindakan" class="form-control" id="hukuman">
                            <option value="">-Silahkan Pilih-</option>											
                            <option value="Berobat">Berobat</option>
                            <option value="Emergency 1">Emergency 1</option>
                            <option value="Emergency 2">Emergency 2</option>
                            <option value="Rumah Sakit">Rumah Sakit</option>
                            <option value="Pulang Sementara">Pulang Sementara</option>
                        </select>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go">
                    </form>
				</div>
            </div>
         </div>
    </div>
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Filter Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Penginput 
                    <hr>
                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbykategori" method="POST" target='_blank'>
                    
                        <input type="hidden" name="nilaipenginput" value="1">

                        Pilih Penginput <br>
                        <select name="penginput" id="penginput"  placeholder="Test" class="form-control" >
                            <option value="">-Silahkan Pilih-</option>

                            <optgroup label="Staf Bagian Kesehatan">
                            <?php foreach ($stafbakes as $row): ?>
                
                                <option value="<?php echo $row->nama ?>"> <?php echo $row->nama ?> </option>

                            <?php endforeach ?>

                            <optgroup label="Bagian Kesehatan Kelas 6">
                            <?php foreach ($stafbakeskelas6 as $row): ?>
                
                                <option value="<?php echo $row->nama ?>"> <?php echo $row->nama ?> </option>

                            <?php endforeach ?>
                            
                            
                        </select>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go">
                    </form>
				</div>
            </div>
         </div>
    </div>
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Filter Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Rayon 
                    <hr>
                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbykategori" method="POST" target='_blank'>
                    
                        <input type="hidden" name="nilairayon" value="1">

                        Pilih Rayon <br>
                        <select name="rayon" id="rayon"  placeholder="Test" class="form-control" >
							<option value="">-Silahkan Pilih-</option>

							<?php foreach ($rayon as $row): ?>
                        
								<option value="<?php echo $row->rayon ?>"> <?php echo $row->rayon ?> </option>

							<?php endforeach ?>
						</select>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go">
                    </form>
				</div>
            </div>
         </div>
    </div>
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary">Filter Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Tanggal Sakit
                    <hr>

                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbykategori" method="POST" target='_blank'>

                    <input type="hidden" name="nilaitanggal" value="1">

                    Tanggal Awal <br>
                    <input type="date" name="tanggalawal" required="" class="form-control"><br>

                    Tanggal Akhir <br>
                    <input type="date" name="tanggalakhir" required="" class="form-control"><br>
                    <br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Go" >
                    </form>
				</div>
            </div>
         </div>
    </div>

</div>

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