<?php
/* Smarty version 3.1.30, created on 2018-02-14 20:26:14
  from "E:\xampp\htdocs\rpg_web\application\views\ucp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a848d56588337_51887117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8411afd5d2043ac62c0aec7eee235b283c033a94' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\ucp.tpl',
      1 => 1518636373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a848d56588337_51887117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- wrapper -->
	<div id="wrapper">
    <section class="hero parallax" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/cover/cover-parallax.jpg); background-position: 50% -266.667px;">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">User Panel</div>
				</div>
			</div>
		</section>	

        
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
                    <div class="alert alert-success alert-lg">
					<h4 class="alert-title">Well done!</h4>
					<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
				</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-sm-30">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Menu</div>
								<div class="panel-body no-padding">
									<ul class="panel-list-bordered">
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
change_details"><i class="fa fa-edit"></i> Change Details</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
characters"><i class="fa fa-user-secret"></i> My Characters</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
activity"><i class="fa fa-file"></i> Account Log</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
support_messages"><i class="fa fa-envelope"></i> Suppport Messages</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
main/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-8 col-sm-4 hidden-xs">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Account Details</div>
								<div class="panel-body">
									I am a frontend developer &amp; designer. Love to create awesome designs and unique websites.
									<ul class="panel-list margin-top-25">
										<li><i class="fa fa-clock-o"></i> Email: test@gmail.com</li>
										<li><i class="fa fa-map-marker"></i> United Kingdom</li>
										<li><i class="fa fa-chain-broken"></i> Gameforest</li>
									</ul>
								</div>
							</div>
						</div>
						</div>
						
					
					</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper --><?php }
}
