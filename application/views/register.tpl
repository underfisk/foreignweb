<!-- wrapper -->
	<div id="wrapper" ng-app="templateApp">	
		<section class="hero hero-panel" style="background-image: url({$app_url}img/cover/cover-register.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-users"></i> Register to Foreign Sword</h3>
							</div>
							<div class="panel-body">
									{if $CI->session->flashdata('register-error') != null }
										<div class="alert alert-danger">
											<strong>Ops!</strong> {$CI->session->flashdata('register-error')}
										</div>
									{/if}						
								<form action="{$base_url}register" method="post">
									<label>Username:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" value="{set_value('username')}" name="username" placeholder="Username" required>
										{{form_error('username') }}
									</div>
									<label>Email:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-envelope"></i>
										<input type="email" class="form-control" value="{set_value('email')}" name="email" placeholder="Email" required>
										{{form_error('email') }}
									</div>
									<label>Password:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" value="{set_value('password')}" name="password" placeholder="Password">
										{{form_error('password') }}
									</div>
									<label>Confirm Password:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-check"></i>
										<input type="password" class="form-control" value="{set_value('confirm-password')}" name="confirm-password" placeholder="Confirm Password">
										{{form_error('confirm-password') }}
									</div>
									<label>Secret Answer:</label>
									<div class="controls form-group">
										<div class="row">
											<div class="col-lg-2 no-padding-right">
												<span class="helper-left">5 + 5 =</span>
											</div>
											<div class="col-lg-10">
													<input type="text" class="form-control" namme="security-password" placeholder="Your Answer" />
											</div>
										</div>
									</div>
									
									<button type="submit" class="btn btn-primary btn-block">Register</button>
							</form>		
						
							</div>
							<div class="panel-footer">
								Already have an account? <a href="{$base_url}login">Sign In Now</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper -->