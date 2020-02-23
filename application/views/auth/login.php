
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>">
					<a href="<?= base_url() ?>home">
						<span class="login100-form-title p-b-10">
							<img src="<?= base_url(); ?>assets/img/b.jpg" width=80>
						</span>
					</a>
					<span class="login100-form-title p-b-30 text-color">
						Welcome
					</span>
				 <?= $this->session->flashdata('message'); ?>
				 <?= $this->session->flashdata('message2'); ?>
 

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input class="input100" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<hr>
					<div class="text-center p-t-1">
						<h6>
							<a class="txt2" href="<?= base_url('auth/'); ?>forgetPassword">
							Forgot Password?
							</a>
						</h6>
						<span class="txt1">
							Don’t have an account?
						</span>
						<a class="txt2 text-primary" href="<?= base_url('auth/'); ?>registration">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
