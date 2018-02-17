<?php
/* Smarty version 3.1.30, created on 2018-02-15 09:57:53
  from "/var/www/html/rpg_web/application/views/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a854b91e643c8_65550099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f16b1ec9e341e8bcf4bf56ed4099e3a52fc8165b' => 
    array (
      0 => '/var/www/html/rpg_web/application/views/login.tpl',
      1 => 1518677700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a854b91e643c8_65550099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero hero-panel" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/cover/cover-login.jpg);">
			<div class="hero-bg"></div>
			<div class="container relative">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
						<div class="panel panel-default panel-login">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-user"></i> Sign In to Foreign Sword</h3>
							</div>
							<div class="panel-body">
								
								<?php if ($_smarty_tpl->tpl_vars['CI']->value->session->flashdata('login-error') != null) {?>
									<div class="alert alert-danger">
										<strong>Ops!</strong> <?php echo $_smarty_tpl->tpl_vars['CI']->value->session->flashdata('login-error');?>

									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['CI']->value->session->flashdata('register-success')) {?>
									<div class="alert alert-success">
										<strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['CI']->value->session->flashdata('register-success');?>

									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['CI']->value->session->flashdata('activate-success')) {?>
									<div class="alert alert-success">
										<strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['CI']->value->session->flashdata('activate-success');?>

									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['CI']->value->session->flashdata('activate-error')) {?>
									<div class="alert alert-danger">
										<strong>Ops!</strong> <?php echo $_smarty_tpl->tpl_vars['CI']->value->session->flashdata('activate-error');?>

									</div>
								<?php }?>
								<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login" method="post">
								
								<label> Username: </label>
									<div class="form-group input-icon-left">
										<i class="fa fa-user"></i>
										<input type="text" class="form-control"  value="<?php echo set_value('username');?>
" name="username" placeholder="Username" required>
										<?php ob_start();
echo form_error('username');
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

									</div>
									<label> Password: </label>
									<div class="form-group input-icon-left">
										<i class="fa fa-lock"></i>
										<input type="password" class="form-control"  value="<?php echo set_value('password');?>
" name="password" placeholder="Password" required>
										<?php ob_start();
echo form_error('password');
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>

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
								Don't have Foreign Sword account? <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">Sign Up Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper --><?php }
}
