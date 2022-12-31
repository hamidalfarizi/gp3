<!-- Begin Page Content -->
<div class="container-fluid text-dark">
  
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Data Perizinan Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Tanggal Izin
                    <hr>

                    <form action="<?php echo base_url(); ?>bahasa/perizinan/filterbytanggal" method="POST" target='_blank'>

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

    <!-- <div class="row">
		<div class="col-4">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Data Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Kelas
                    <hr>

                    <form action="<?php echo base_url(); ?>filter_siswa/filterbykelas" method="POST" target='_blank'>
                    
                         <input type="hidden" name="nilaikelas" value="1">

                         Pilih Kelas <br>
                        <select name="kelas" required="">

                            <?php foreach ($kelas as $row): ?>
                        
                            <option value="<?php echo $row->kelas ?>"> <?php echo $row->kelas ?> </option>

                            <?php endforeach ?>
                        </select>
                         <br>
                        <br>
                        <input type="submit" value="Go">
                    </form>
				</div>
            </div>
         </div>
    </div>
    <div class="row">
		<div class="col-4">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Data Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Stambuk
                    <hr>
                    <form action="<?php echo base_url(); ?>filter_siswa/get_siswa" method="POST" >
                    
                        <input type="hidden" name="nilaisiswa" value="1">

                        Pilih Kelas <br>
                        <input type="Number" pattern="\d*" name="nis" value="<?php echo $this->input->post('nis'); ?>" class="form-control" id="nis" />
                        <br>
                        <br>
                        <input type="submit" value="Go">
                    </form>
				</div>
            </div>
         </div>
    </div> -->

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