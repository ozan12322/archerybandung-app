
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth/forgetPassword'); ?>">
					<a href="<?= base_url() ?>toko">
						<span class="login100-form-title p-b-10">
							<img src="#" width=80>
						</span>
					</a>
					<span class="login100-form-title p-b-20 text-color">
						<h5>Forgot your password ?</h5>
					</span>
						
				 <?= $this->session->flashdata('message'); ?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input class="input100" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Reset Password
							</button>
						</div>
					</div>
					<hr>
					<div class="text-center p-t-1">
						<h6>
							<a class="txt2" href="<?= base_url('auth/'); ?>index">
							Back To Login
							</a>
						</h6>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
