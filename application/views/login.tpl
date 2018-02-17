<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero hero-panel" style="background-image: url({$app_url}img/cover/cover-login.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-user"></i> Sign In to Foreign Sword</h3>
							</div>
							<div class="panel-body">
								
								{if $CI->session->flashdata('login-error') != null }
									<div class="alert alert-danger">
										<strong>Ops!</strong> {$CI->session->flashdata('login-error')}
									</div>
								{elseif $CI->session->flashdata('register-success')}
									<div class="alert alert-success">
										<strong>Success!</strong> {$CI->session->flashdata('register-success')}
									</div>
								{elseif $CI->session->flashdata('activate-success')}
									<div class="alert alert-success">
										<strong>Success!</strong> {$CI->session->flashdata('activate-success')}
									</div>
								{elseif $CI->session->flashdata('activate-error')}
									<div class="alert alert-danger">
										<strong>Ops!</strong> {$CI->session->flashdata('activate-error')}
									</div>
								{/if}
								<form action="{$base_url}login" method="post">
								
								<label> Username: </label>
									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control"  value="{set_value('username')}" name="username" placeholder="Username" required>
										{{form_error('username') }}
									</div>
									<label> Password: </label>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control"  value="{set_value('password')}" name="password" placeholder="Password" required>
										{{form_error('password') }}
									</div>
									
									<button type="submit" class="btn btn-primary btn-block">Sign In</button>
									
									<div class="form-actions">
										<div class="checkbox checkbox-primary">
											<input type="checkbox" id="checkbox"> 
											<label for="checkbox">Remember me</label>
										</div>
									</div>
								</form>
							</div>
							<div class="panel-footer">
								Don't have Foreign Sword account? <a href="{$base_url}register">Sign Up Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper -->