<title>Print Rekapitulasi Santri Perkelas</title>

<!-- Begin Page Content -->
<div class="container-fluid text-dark">

<br>
	<!-- DataTales Example -->
	<div class="card shadow mb-6">
		<div class="card-header py-3">
			<div class="d-flex bd-highlight mb-3">
				<div class="mr-auto p-2 bd-highlight">
					<br><br>
					<h1 class="h2 text-uppercase text-gray-800"><strong>Jumlah Rekapitulasi Santri Per-Kelas</strong></h1>
				</div>
				<div class="p-2 bd-highlight">
					<img class="rounded float-right" src="<?php echo base_url('uploads/profil/logo.png'); ?>" alt="not found" height="150px">
				</div>
			</div>	
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="datatable-siswa" class="table table-striped table-dark table-bordered table-hover" width="100%">
				    <thead>
						<tr class="headings">
						<th class="column-title">Kelas</th>
						<th class="column-title">B</th>
						<th class="column-title">C</th>
						<th class="column-title">D</th>
						<th class="column-title">E</th>
						<th class="column-title">F</th>
						<th class="column-title">G</th>
						<th class="column-title">H</th>
						<th class="column-title">I</th>
						<th class="column-title">J</th>
						<th class="column-title">Jumlah</th>
												
						</tr>
					</thead>

                  <tbody>                  
                    <tr>                      
                      <td>1</td>
                      <td><?php $satuB = $this->db->query("SELECT * FROM siswa WHERE kelas = '1-B' AND aktif = '1' ")->num_rows(); echo $satuB ?></td>
					  <td><?php $satuC = $this->db->query("SELECT * FROM siswa WHERE kelas = '1-C' AND aktif = '1' ")->num_rows(); echo $satuC ?></td>
					  <td><?php $satuD = $this->db->query("SELECT * FROM siswa WHERE kelas = '1-D' AND aktif = '1' ")->num_rows(); echo $satuD ?></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
					  <td></td>
                      <td><?php $jumlahkelas1 = $satuB + $satuC + $satuD; echo $jumlahkelas1 ?></td>  
                    </tr>
              
                    <tr>                        
						<td>1 Int</td>
						<td><?php $satuintB = $this->db->query("SELECT * FROM siswa WHERE kelas = '1 Int B' AND aktif = '1' ")->num_rows(); echo $satuintB ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php $jumlahkelas1int = $satuintB ; echo $jumlahkelas1int ?></td>  
                    </tr>

                    <tr>                       
						<td>2</td>
						<td><?php $duaB = $this->db->query("SELECT * FROM siswa WHERE kelas = '2-B' AND aktif = '1' ")->num_rows(); echo $duaB ?></td>
						<td><?php $duaC = $this->db->query("SELECT * FROM siswa WHERE kelas = '2-C' AND aktif = '1' ")->num_rows(); echo $duaC ?></td>
						<td><?php $duaD = $this->db->query("SELECT * FROM siswa WHERE kelas = '2-D' AND aktif = '1' ")->num_rows(); echo $duaD ?></td>
						<td><?php $duaE = $this->db->query("SELECT * FROM siswa WHERE kelas = '2-E' AND aktif = '1' ")->num_rows(); echo $duaE ?></td>
						<td><?php $duaF = $this->db->query("SELECT * FROM siswa WHERE kelas = '2-F' AND aktif = '1' ")->num_rows(); echo $duaF ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php $jumlahkelas2 = $duaB + $duaC + $duaD + $duaE + $duaF ; echo $jumlahkelas2 ?></td>  
                    </tr>

                    <tr>                       
						<td>3</td>
						<td><?php $tigaB = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-B' AND aktif = '1' ")->num_rows(); echo $tigaB ?></td>
						<td><?php $tigaC = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-C' AND aktif = '1' ")->num_rows(); echo $tigaC ?></td>
						<td><?php $tigaD = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-D' AND aktif = '1' ")->num_rows(); echo $tigaD ?></td>
						<td><?php $tigaE = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-E' AND aktif = '1' ")->num_rows(); echo $tigaE ?></td>
						<td><?php $tigaF = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-F' AND aktif = '1' ")->num_rows(); echo $tigaF ?></td>
						<td><?php $tigaG = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-G' AND aktif = '1' ")->num_rows(); echo $tigaG ?></td>
						<td><?php $tigaH = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-H' AND aktif = '1' ")->num_rows(); echo $tigaH ?></td>
						<td><?php $tigaI = $this->db->query("SELECT * FROM siswa WHERE kelas = '3-I' AND aktif = '1' ")->num_rows(); echo $tigaI ?></td>
						<td></td>
						<td><?php $jumlahkelas3 = $tigaB + $tigaC + $tigaD + $tigaE + $tigaF + $tigaG + $tigaH + $tigaI ; echo $jumlahkelas3 ?></td>  
                    </tr>

                    <tr>                      
						<td>3 Int</td>
						<td><?php $tigaintB = $this->db->query("SELECT * FROM siswa WHERE kelas = '3 Int B' AND aktif = '1' ")->num_rows(); echo $tigaintB ?></td>
						<td><?php $tigaintC = $this->db->query("SELECT * FROM siswa WHERE kelas = '3 Int C' AND aktif = '1' ")->num_rows(); echo $tigaintC ?></td>
						<td><?php $tigaintD = $this->db->query("SELECT * FROM siswa WHERE kelas = '3 Int D' AND aktif = '1' ")->num_rows(); echo $tigaintD ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php $jumlahkelas3int = $tigaintB + $tigaintC + $tigaintD; echo $jumlahkelas3int ?></td>
                    </tr>
              
                    <tr>                       
						<td>4</td>
						<td><?php $empatB = $this->db->query("SELECT * FROM siswa WHERE kelas = '4-B' AND aktif = '1' ")->num_rows(); echo $empatB ?></td>
						<td><?php $empatC = $this->db->query("SELECT * FROM siswa WHERE kelas = '4-C' AND aktif = '1' ")->num_rows(); echo $empatC ?></td>
						<td><?php $empatD = $this->db->query("SELECT * FROM siswa WHERE kelas = '4-D' AND aktif = '1' ")->num_rows(); echo $empatD ?></td>
						<td><?php $empatE = $this->db->query("SELECT * FROM siswa WHERE kelas = '4-E' AND aktif = '1' ")->num_rows(); echo $empatE ?></td>
						<td><?php $empatF = $this->db->query("SELECT * FROM siswa WHERE kelas = '4-F' AND aktif = '1' ")->num_rows(); echo $empatF ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php $jumlahkelas4 = $empatB + $empatC + $empatD + $empatE + $empatF ; echo $jumlahkelas4 ?></td>
                   
                    </tr>
              
                    <tr>                        
						<td>5</td>
						<td><?php $limaB = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-B' AND aktif = '1' ")->num_rows(); echo $limaB ?></td>
						<td><?php $limaC = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-C' AND aktif = '1' ")->num_rows(); echo $limaC ?></td>
						<td><?php $limaD = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-D' AND aktif = '1' ")->num_rows(); echo $limaD ?></td>
						<td><?php $limaE = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-E' AND aktif = '1' ")->num_rows(); echo $limaE ?></td>
						<td><?php $limaF = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-F' AND aktif = '1' ")->num_rows(); echo $limaF ?></td>
						<td><?php $limaG = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-G' AND aktif = '1' ")->num_rows(); echo $limaG ?></td>
						<td><?php $limaH = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-H' AND aktif = '1' ")->num_rows(); echo $limaH ?></td>
						<td><?php $limaI = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-I' AND aktif = '1' ")->num_rows(); echo $limaI ?></td>
						<td><?php $limaJ = $this->db->query("SELECT * FROM siswa WHERE kelas = '5-J' AND aktif = '1' ")->num_rows(); echo $limaJ ?></td>
						<td><?php $jumlahkelas5 = $limaB + $limaC + $limaD + $limaE + $limaF + $limaG + $limaH + $limaI + $limaJ ; echo $jumlahkelas5 ?></td>  
                    </tr>
              
                    <tr>                       
						<td>6</td>
						<td><?php $enamB = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-B' AND aktif = '1' ")->num_rows(); echo $enamB ?></td>
						<td><?php $enamC = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-C' AND aktif = '1' ")->num_rows(); echo $enamC ?></td>
						<td><?php $enamD = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-D' AND aktif = '1' ")->num_rows(); echo $enamD ?></td>
						<td><?php $enamE = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-E' AND aktif = '1' ")->num_rows(); echo $enamE ?></td>
						<td><?php $enamF = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-F' AND aktif = '1' ")->num_rows(); echo $enamF ?></td>
						<td><?php $enamG = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-G' AND aktif = '1' ")->num_rows(); echo $enamG ?></td>
						<td><?php $enamH = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-H' AND aktif = '1' ")->num_rows(); echo $enamH ?></td>
						<td><?php $enamI = $this->db->query("SELECT * FROM siswa WHERE kelas = '6-I' AND aktif = '1' ")->num_rows(); echo $enamI ?></td>
						<td></td>
						<td><?php $jumlahkelas6 = $enamB + $enamC + $enamD + $enamE + $enamF + $enamG + $enamH + $enamI ; echo $jumlahkelas6 ?></td>  
                    </tr>
                    <tr>
                      <td colspan="10">Jumlah</td>
                      <td><?php echo $jumlahkelas1 + $jumlahkelas1int + $jumlahkelas2 + $jumlahkelas3 + $jumlahkelas3int + $jumlahkelas4 + $jumlahkelas5 + $jumlahkelas6 ?></td>
                    </tr>
                  </tbody>
				</table>
			</div>	
		</div>
	</div>

	<!-- content row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script>
	window.onload = function () {
		window.print();
	};
</script>


<!-- Custom fonts for this template-->
<link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css">
<!-- Custom styles for this template-->
<link href="<?php echo base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
<!-- jquery -->
<script src="<?= base_url('assets/vendor/jquery/jquery.js'); ?>"></script>

<!-- sweetalert2 -->
<script src="<?= base_url('node_modules/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
  

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

<style>
	table, td, th {
	border: 1px solid black;
	}

	table {
	border-collapse: collapse;
	width: 100%;
	}

	td {
	text-align: center;
	}

	th {
	text-align: center;
	}
</style>