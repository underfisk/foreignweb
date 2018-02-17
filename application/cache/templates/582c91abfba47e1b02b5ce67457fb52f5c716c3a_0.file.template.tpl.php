<?php
/* Smarty version 3.1.30, created on 2018-02-15 09:57:29
  from "/var/www/html/rpg_web/application/views/static/template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a854b79b22905_57817241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '582c91abfba47e1b02b5ce67457fb52f5c716c3a' => 
    array (
      0 => '/var/www/html/rpg_web/application/views/static/template.tpl',
      1 => 1518677700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a854b79b22905_57817241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
   <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

   <body class="fixed-header" ng-app="tmpApp">
     <!-- Header navbar here -->
    <header>
		<div class="container">
			<span class="bar hide"></span>
			<nav>
				<div class="nav-control">
					<ul>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="dropdown-toggle">Home</a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
download" class="dropdown-toggle">Download</a>
						</li>
						<li>
							<a href="gallery">Gallery</a>
						</li>
						<li>
							<a href="howto">How to Connect?</a>
						</li>
						<li>
							<a href="contact">Support</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<?php if ($_smarty_tpl->tpl_vars['isOnline']->value) {?>
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/user/avatar.jpg" alt=""> <span><?php echo $_smarty_tpl->tpl_vars['CI']->value->session->userdata('usr');?>
</span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
account"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
characters"><i class="fa fa-gamepad"></i> Characters</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings"><i class="fa fa-gear"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
main/logout"><i class="fa fa-power-off"></i> Sign Out</a></li>
					</ul>
				</div>
				<div class="nav-dropdown dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="label label-danger">3</span></a>
					<ul class="dropdown-menu">
					<!-- order them by type and just get the top 5-->
						<li class="dropdown-header"><i class="fa fa-bell"></i> You have 5 new notifications</li>
						<li><a href="#">Account activation</a></li>
						<li><a href="#">New character created <span class="label label-success">Characters</span></a></li>
						<li><a href="#">Name of it obtained <span class="label label-primary">Achivement</span></a></li>
						<li><a href="#">Reached max level <span class="label label-primary">Achivement</span></a></li>
						<li><a href="#">New login detected <span class="label label-warning">Account</span></a></li>
						<li class="dropdown-footer"><a href="#">View all</a></li>
					</ul>
				</div>
				<?php } else { ?>
					<!-- login/register here -->
					<nav>
						<div class="nav-control">
							<ul>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
login"  class="dropdown-toggle">Login/Register</a>
								</li>
							</ul>
						</div>
					</nav>
				<?php }?>
				<a href="#" data-toggle="modal-search"><i class="fa fa-search"></i></a>
			</div>
		</div>
	</header>
	<!-- /header -->

<!-- search -->
	<div class="modal-search">
		<div class="container">
			<input type="text" class="form-control" placeholder="Type to search...">
			<i class="fa fa-times close"></i>
		</div>
	</div><!-- /.modal-search -->

	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>


   </body>
   <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</html>
<?php }
}
