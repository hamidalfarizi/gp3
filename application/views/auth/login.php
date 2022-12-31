<body class="bg-gradient-primary">

	<div class="container">
		<br><br><br>

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image">
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h2 class="alert-link text-gray-900"><strong>Sistem Informasi Pendataan Santri</strong></h2>
										<h1 class="h4 text-gray-900 mb-4">Pondok Modern Darussalam Gontor Putri Kampus 3</h1>
									</div>
									
									<!-- flash data -->
									<?php if($message) { ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<?php echo $message;?>
									</div>
									<?php } ?>	

									<?php echo form_open("auth/login");?>
									<div class="form-group">
										<?php echo form_input($identity);?>
									</div>
									<div class="form-group">
										<?php echo form_input($password);?>
									</div>
									<p>
										<?php echo lang('login_remember_label', 'remember');?>
										<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
									</p>
									<p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-dark btn-user btn-block"');?>
									</p>

									<?php echo form_close();?>
									<hr>
									<div class="text-center">
										<a class="small" href="forgot_password">Lupa Password</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
</body>