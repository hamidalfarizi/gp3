<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title ?></title>

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
  
</head>

<!-- Begin Page Content -->
<div class="container-fluid text-dark">
<br>
<br>

	<!-- page heading
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
	</div> -->

    <figure class="text-center">
        <blockquote class="blockquote">
            <h1 class="h1 mb-0 text-dark"><strong><?php echo $title ?></strong></h1>
            <h3 class="h3 mb-0 text-gray-800">Pondok Modern Darussalam Gontor Kampus 2</h1>
        </blockquote>
    </figure>
		
    <div class="card shadow mb-6">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aktif</th>
                            <th>Stambuk</th>
                            <th>Nama Santri</th>
                            <th>Kelas</th>
                            <th>Konsulat</th>
                            <th>Rayon</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no=1; foreach ($datafilter as $row): ?>

                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->aktif == 1 ? '<span class="badge badge-primary">Aktif</span>' : '<span class="badge badge-secondary">Non-aktif</span>'; ?></td>
                            <td><?php echo $row->nis; ?></td>
                            <td><?php echo $row->nama_lengkap; ?></td>
                            <td><?php echo $row->kelas; ?></td>
                            <td><?php echo $row->konsul; ?></td>
                            <td><?php echo $row->rayon; ?></td>
                            <td>
                                <a href="<?php echo site_url('siswa/detail/' . $row->id); ?>" class="btn btn-info btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-search-plus"></i>
                                    </span>
                                </a>
                                <a href="<?php echo site_url('siswa/edit/' . $row->id); ?>" class="btn btn-primary btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <a href="<?php echo site_url('siswa/remove/' . $row->id); ?>" class="btn btn-danger btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                            <?php endforeach ?>
                    </tbody>     
                </table>
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

<!-- <script>
	window.onload = function () {
		// window.print();
	};
</script> -->

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "pageLength": 50,
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

<!-- datatables-->
<script src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"></script>
<script src="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>