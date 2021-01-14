<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>
<div class="login-box">
	<div class="login-logo">
		<a href="<?= base_url('/admin/index2.html') ?>"><b>Admin</b>LTE</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="<?= base_url('/auth/authLogin') ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="Username" value="<?= old('username') ?>" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
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
					<button type="submit" class="btn btn-primary btn-block">Sign In</button>
				</div>
			</form>

			<!-- /.social-auth-links -->
			<p class="mb-0">
				<a href="<?= base_url('/auth/register') ?>" class="text-center">Register a new membership</a>
			</p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('/admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/admin/dist/js/adminlte.min.js') ?>"></script>
<!-- ridho -->
<?= $this->endSection(); ?>