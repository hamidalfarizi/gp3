<!-- <link rel="stylesheet" href="<?= base_url('assets/css/toggle-switchy.css') ?>"> -->

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- flash data -->
	<?php if ($this->session->flashdata('message')) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<?= $this->session->flashdata('message'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php } ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
	</div>

	<div class='mb-4'>
		<div class="btn-group" role="group" aria-label="Basic example">
			<a href="<?= base_url('auth/create_user'); ?>" class="btn btn-primary">
				<span class="text">Tambah Pengguna</span>
			</a>
			<a href="<?= base_url('auth/create_group'); ?>" class="btn btn-primary">
				<span class="text">Kelola Grup</span>
			</a>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h3 class="m-0 font-weight-bold text-primary">Daftar Pengguna</h6>
		</div>
		<div class="card-body">
			<table id="datatable-users" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Email</th>
						<th>Grup</th>
						<th>Aktivasi</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user) : ?>
						<tr>
							<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
							<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
							<td>
								<?php foreach ($user->groups as $group) : ?>
									<a href="<?= base_url('auth/edit_group/' . $group->id); ?>"><span class="badge badge-secondary"><?= $group->name; ?></span></a>
								<?php endforeach ?>
							</td>
							<td>
								<!-- <label class="toggle-switchy" for="check" data-size="sm" data-style="rounded">
									<input type="checkbox" id="check">
									<span class="toggle">
										<span class="switch"></span>
									</span>
								</label>
								<br>
								<br> -->
								<?php if ($user->active) { ?>
									<a href="<?= base_url('auth/deactivate/' . $user->id); ?>" class="btn btn-warning btn-icon-split btn-sm">
										<span class="icon text-white-50">
											<i class="fas fa-cog"></i>
										</span>
										<span class="text">Non-aktifkan</span>
									</a>
								<?php } else { ?>
									<a href="<?= base_url('auth/activate/' . $user->id); ?>" class="btn btn-primary btn-icon-split btn-sm">
										<span class="icon text-white-50">
											<i class="fas fa-cog"></i>
										</span>
										<span class="text">Aktifkan</span>
									</a>
								<?php } ?>
							</td>
							<td>
								<a href="<?= base_url('auth/edit_user/'.$user->id); ?>" class="btn btn-success btn-icon-split btn-sm">
									<span class="icon text-white-50">
										<i class="fas fa-cog"></i>
									</span>
									<span class="text">Edit</span>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Nama Depan</th>
						<th>Nama Belakang</th>
						<th>Email</th>
						<th>Grup</th>
						<th>Aktivasi</th>
						<th>Edit</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>

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