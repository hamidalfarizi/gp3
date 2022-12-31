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
		<h1 class="h3 mb-0 text-gray-800">Kelola Grup</h1>
	</div>
      
      <div class='row'>
            <div class='col-md-6'>
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Tambah Grup</h6>
                        </div>
                        <div class="card-body">
                              <?php echo form_open("auth/create_group");?>

                                    <p>
                                          <?php echo lang('create_group_name_label', 'group_name');?> <br />
                                          <?php echo form_input($group_name);?>
                                    </p>

                                    <p>
                                          <?php echo lang('create_group_desc_label', 'description');?> <br />
                                          <?php echo form_input($description);?>
                                    </p>
                                    <p>
                                          <?php echo form_submit('submit', lang('create_group_submit_btn'), 'class="btn btn-primary"');?>
                                          <a href="<?= base_url('users'); ?>" class='btn btn-danger'>Kembali</a>
                                    </p>
                                    
                              <?php echo form_close();?>
                        </div>
                  </div>
            </div>

            <div class='col-md-6'>
                  <div class="card shadow mb-4">
                        <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Daftar Grup</h6>
                        </div>
                        <div class="card-body">
                              <table class='table table-hover'>
                                    <?php foreach ($groups as $group) { ?>
                                          <tr>
                                                <td><?= $group['name'] ?></td>
                                                <td><?= $group['description'] ?></td>
                                                <td><a href="<?= base_url('auth/edit_group/'.$group['id']) ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                          </tr>
                                    <?php } ?>
                              </table>
                        </div>
                  </div>
            </div>
      </div>
</div>