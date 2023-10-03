
<?php
	$comp_model = new SharedController;
	$current_page = get_current_url();
	$csrf_token = Csrf :: $token;
	
	$show_header = $this->show_header;
	$view_title = $this->view_title;
	$redirect_to = $this->redirect_to;

?>

	<section class="page">
		
<?php
	if( $show_header == true ){
?>

		<div  class="p-3 mb-3">
			<div class="container">
				
				<div class="row ">
					
		<div class="col-sm-6 ">
			<h3 class="record-title">User Registration</h3>

		</div>

		<div class="col-sm-6 comp-grid">
			<div class="">
	<div class="text-center">
		Already have an account?  <a class="btn btn-primary" href="<?php print_link('') ?>"> Login</a>
	</div>
</div>
		</div>

				</div>
			</div>
		</div>

<?php
	}
?>

		<div  class="">
			<div class="container">
				
				<div class="row ">
					
		<div class="col-md-7 comp-grid">
			
	<?php $this :: display_page_errors(); ?>
	
	<div  class=" animated fadeIn">
		<form id="akun-userregister-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("index/register?csrf_token=$csrf_token") ?>" method="post">
		<div>
		
<div class="row">
								
								<div class="form-group col-md-6">
									<label class="control-label" for="email">Email <span class="text-danger">*</span></label>
									<div id="ctrl-email-holder" class=""> 
										<input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  required="" name="email"  data-url="api/json/akun_email_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
									 
<div class="check-status"></div> 
										
									</div>
									 
									
								</div>
								

								
								<div class="form-group col-md-6">
									<label class="control-label" for="username">Username <span class="text-danger">*</span></label>
									<div id="ctrl-username-holder" class=""> 
										<input id="ctrl-username"  value="<?php  echo $this->set_field_value('username',''); ?>" type="text" placeholder="Enter Username"  required="" name="username"  data-url="api/json/akun_username_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
									 
<div class="check-status"></div> 
										
									</div>
									 
									
								</div>
								

								
								<div class="form-group col-md-6">
									<label class="control-label" for="password">Password <span class="text-danger">*</span></label>
									<div id="ctrl-password-holder" class=""> 
										<input id="ctrl-password"  value="<?php  echo $this->set_field_value('password',''); ?>" type="password" placeholder="Enter Password"  required="" name="password"  class="form-control " />
									 
 
										
									</div>
									 
									
								</div>
								
								
								<div class="form-group col-md-6">
									<label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
									<div id="ctrl-confirm_password-holder" class=""> 
										
<input id="-confirm"  class="form-control " type="password" name="confirm_password" required placeholder="Confirm Password" />
 
										
									</div>
									 
									
								</div>
								

								
								<div class="form-group col-md-6">
									<label class="control-label" for="telp">Telp <span class="text-danger">*</span></label>
									<div id="ctrl-telp-holder" class=""> 
										<input id="ctrl-telp"  value="<?php  echo $this->set_field_value('telp',''); ?>" type="number" placeholder="Enter Telp" step="1"  required="" name="telp"  class="form-control " />
									 
 
										
									</div>
									 
									
								</div>
								


		</div>
		<div class="form-group form-submit-btn-holder text-center">
			<button class="btn btn-primary" type="submit">
				Submit
				<i class="fa fa-send"></i>
			</button>
		</div>
	</form>
	</div>

		</div>

				</div>
			</div>
		</div>

	</section>
