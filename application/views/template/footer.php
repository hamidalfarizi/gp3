<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih logout jika Anda ingin mengakhiri sesi ini.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?php echo base_url('auth/logout')?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url()?>assets/vendor/jquery/jquery.js"></script>
<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url()?>assets/js/sb-admin-2.js"></script>
<script src="<?= base_url()?>assets/js/custom.js"></script>

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.css">
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/datatables/jquery.dataTables.min.js">

<script src="<?= base_url()?>assets/vendor/datatables/jquery-3.5.1.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/buttons.bootstrap4.min.js"></script>

<script src="<?= base_url()?>assets/vendor/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/buttons.colVis.min.js"></script>

<script src="<?= base_url()?>assets/vendor/datatables/jszip.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/vendor/datatables/vfs_fonts.js"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>

</html>