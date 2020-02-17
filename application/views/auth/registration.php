
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login150">
				<a href="<?= base_url() ?>home">
						<span class="login100-form-title p-b-10">
							<img src="<?= base_url('assets'); ?>/images/logo/Kang.png" width=80>
						</span>
					</a>
					<span class="login100-form-title p-b-30 text-color">
						Create an Account!
					</span>
					 
					
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth/registration'); ?>">

					<div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Register Accounts 
							</button>
						</div>
					</div>
					<hr>
					<div class="text-center p-t-1">
						<h6>
							<a class="txt2" href="<?= base_url('auth/'); ?>forget_password">
							Forgot Password?
							</a>
						</h6>
						<span class="txt1">
							Already have an account? 
						</span>

						<a class="txt2" href="<?= base_url(); ?>auth">
							Login!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
