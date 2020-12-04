<?= $this->extend('template/login_template'); ?>

<?= $this->section('content'); ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/login_assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login Sipus
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<span class="txt1">
							Belum punya akun?
						</span>
						<a href="#" class="txt2">
							Buat akun
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="/login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/vendor/bootstrap/js/popper.js"></script>
	<script src="/login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="/login_assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/login_assets/js/main.js"></script>
	<?= $this->endSection(); ?>	