<!-- Begin Page Content -->
<div class="container-fluid text-dark">
  
    <div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
                 <div class="card-header py-3">
					<h3 class="m-0 font-weight-bold text-primary">Filter Data Riwayat Sakit Santri</h3>
                    <hr>
                    <br>
                    Form Filter By Tanggal Sakit
                    <hr>

                    <form action="<?php echo base_url(); ?>bakes/riwayatsakit/filterbytanggal" method="POST" target='_blank'>

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