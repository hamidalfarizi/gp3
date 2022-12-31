<!-- Begin Page Content -->
<div class="container-fluid text-dark">
  
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Pelanggaran
                    <hr>
                    <form action="<?php echo base_url(); ?>pengasuhan/pelanggaran/filterbykategori" method="POST" target='_blank'>
                    
                         <input type="hidden" name="nilaipelanggaran" value="1">

                        Pilih Pelanggaran <br>
                        <select name="nama_pelanggaran" id="nama_pelanggaran" placeholder="Test" class="form-control" required>
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
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go" >
                    </form>
				</div>
            </div>
         </div>
    </div>
    <!-- <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Hukuman
                    <hr>
                    <form action="<?php echo base_url(); ?>pengasuhan/pelanggaran/filterbykategori" method="POST" target='_blank'>
                    
                         <input type="hidden" name="nilaihukuman" value="1">

                        Pilih Pelanggaran <br>
                        <select name="hukuman" id="hukuman" placeholder="Test" class="form-control" required>
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
                                <option value="Diturunkan dari kepengurusan">Diturunkan dari kepengurusan</option>
                            <optgroup label="Berat">
                                <option value="Panggilan Orang Tua/Wali">Panggilan Orang Tua/Wali</option>
                                <option value="Di Pindah">Di Pindah</option>
                                <option value="Di Skorsing">Di Skorsing</option>
                                <option value="Di Keluarkan">Di Keluarkan</option>        
                        </select>
                        <br>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Go" >
                    </form>
				</div>
            </div>
         </div>
    </div> -->
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Penghukum
                    <hr>

                    <form action="<?php echo base_url(); ?>pengasuhan/pelanggaran/filterbykategori" method="POST" target='_blank'>

                         <input type="hidden" name="nilaipenghukum" value="1">

                         Pilih Penghukum <br>
                        <select  name="penghukum" class="form-control" id="penghukum">
                            <option value="">-Silahkan Pilih-</option>

                            <optgroup label="Staf Pengasuhan Santri">
                            <?php foreach ($penghukumpengasuhan as $row): ?>

                                <option value="<?php echo $row->nama ?>"> <?php echo $row->nama ?> </option>

                            <?php endforeach ?>

                            <optgroup label="Keamanan Pusat">
                            <?php foreach ($penghukumkeamanan as $row): ?>

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
					<h3 class="m-0 font-weight-bold text-primary">Filter Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Rayon 
                    <hr>
                    <form action="<?php echo base_url(); ?>pengasuhan/pelanggaran/filterbykategori" method="POST" target='_blank' >
                    
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
					<h3 class="m-0 font-weight-bold text-primary">Filter Data Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Tanggal
                    <hr>

                    <form action="<?php echo base_url(); ?>pengasuhan/pelanggaran/filterbykategori" method="POST" target='_blank'>

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