
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth/changePassword'); ?>">
					<a href="<?= base_url() ?>toko">
						<span class="login100-form-title p-b-10">
							<img src="" width=80>
						</span>
					</a>
					<span class="login100-form-title p-b-20 text-color">
						<h5>Change your password for</h5>
						<h6><?= $this->session->userdata('reset_email'); ?></h6>
					</span>
						
				 <?= $this->session->flashdata('message'); ?>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input class="input100" type="password" id="password1" name="password1">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input class="input100" type="password" id="password2" name="password2">
						<span class="focus-input100" data-placeholder="Repeat Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Change Password
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
