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
                    <form action="<?php echo base_url(); ?>bahasa/pelanggaran/filterbykategori" method="POST" target='_blank'>
                    
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
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Pelanggaran Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Penghukum
                    <hr>

                    <form action="<?php echo base_url(); ?>bahasa/pelanggaran/filterbykategori" method="POST" target='_blank'>

                         <input type="hidden" name="nilaipenghukum" value="1">

                         Pilih Penghukum <br>
                        <select  name="penghukum" class="form-control" id="penghukum">
                            <option value="">-Silahkan Pilih-</option>

                            <optgroup label="Staf LAC">
                            <?php foreach ($staflac as $row): ?>
                
                                <option value="<?php echo $row->nama ?>"> <?php echo $row->nama ?> </option>

                            <?php endforeach ?>

                            <optgroup label="Staf CLI">
                            <?php foreach ($stafcli as $row): ?>
                
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
                    <form action="<?php echo base_url(); ?>bahasa/pelanggaran/filterbykategori" method="POST" target='_blank' >
                    
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

                    <form action="<?php echo base_url(); ?>bahasa/pelanggaran/filterbykategori" method="POST" target='_blank'>

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