<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>
<div class="register-box">
	<div class="register-logo">
		<a href="<?= base_url('/admin/index2.html') ?>"><b>Admin</b>LTE</a>
	</div>

	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url('/auth/saveRegister') ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="fullname" value="<?= old('fullname') ?>" class="form-control" placeholder="Full name" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="email" name="email" value="<?= old('email') ?>" class="form-control" placeholder="Email" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="text" name="username" value="<?= old('username') ?>" class="form-control" placeholder="Username" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-primary btn-block">Register</button>
				</div>
			</form>

			<a href="<?= base_url('/auth/login') ?>" class="text-center">I already have a membership</a>
		</div>
		<!-- /.form-box -->
	</div>
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url('/admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/admin/dist/js/adminlte.min.js') ?>"></script>
<?= $this->endSection(); ?>