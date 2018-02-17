<?php
/* Smarty version 3.1.30, created on 2018-02-15 09:58:14
  from "/var/www/html/rpg_web/application/views/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a854ba65569d1_86888291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f482d0fcec41e955e2879ad52b65981f9427ed30' => 
    array (
      0 => '/var/www/html/rpg_web/application/views/register.tpl',
      1 => 1518677700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a854ba65569d1_86888291 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- wrapper -->
	<div id="wrapper" ng-app="templateApp">	
		<section class="hero hero-panel" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/cover/cover-register.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-users"></i> Register to Foreign Sword</h3>
							</div>
							<div class="panel-body">
									<?php if ($_smarty_tpl->tpl_vars['CI']->value->session->flashdata('register-error') != null) {?>
										<div class="alert alert-danger">
											<strong>Ops!</strong> <?php echo $_smarty_tpl->tpl_vars['CI']->value->session->flashdata('register-error');?>

										</div>
									<?php }?>						
								<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register" method="post">
									<label>Username:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control" value="<?php echo set_value('username');?>
" name="username" placeholder="Username" required>
										<?php ob_start();
echo form_error('username');
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

									</div>
									<label>Email:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-envelope"></i>
										<input type="email" class="form-control" value="<?php echo set_value('email');?>
" name="email" placeholder="Email" required>
										<?php ob_start();
echo form_error('email');
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

									</div>
									<label>Password:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control" value="<?php echo set_value('password');?>
" name="password" placeholder="Password">
										<?php ob_start();
echo form_error('password');
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>

									</div>
									<label>Confirm Password:</label>
									<div class="form-group input-icon-left">
										<i class="fa fa-check"></i>
										<input type="password" class="form-control" value="<?php echo set_value('confirm-password');?>
" name="confirm-password" placeholder="Confirm Password">
										<?php ob_start();
echo form_error('confirm-password');
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>

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
								Already have an account? <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login">Sign In Now</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper --><?php }
}
