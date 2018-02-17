<?php
/* Smarty version 3.1.30, created on 2018-02-15 10:13:35
  from "/var/www/html/rpg_web/application/views/ucp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a854f3f0180e2_90654437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08790ea7d82bd402a22d7135fb3fc287381ee44f' => 
    array (
      0 => '/var/www/html/rpg_web/application/views/ucp.tpl',
      1 => 1518686014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a854f3f0180e2_90654437 (Smarty_Internal_Template $_smarty_tpl) {
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
									Your account is <?php if ($_smarty_tpl->tpl_vars['extra']->value['acc_data'][0]['banned'] == 0) {?><b>In good standing</b><?php } else { ?><b>In a bad standing banned</b><?php }?> just continue playing fairly and enjoying the game.
									<ul class="panel-list margin-top-25">
										<li><i class="fa fa-envelope"></i> Email: <?php echo $_smarty_tpl->tpl_vars['extra']->value['acc_data'][0]['email'];?>
</li>
										<li><i class="fa fa-paper-plane-o"></i> Status: <?php if ($_smarty_tpl->tpl_vars['extra']->value['acc_data'][0]['validated'] == 1) {?><b>Activated</b><?php } else { ?><b>Not verified</b><?php }?></li>
										<li><i class="fa fa-calendar"></i> Join date: <?php echo $_smarty_tpl->tpl_vars['extra']->value['acc_data'][0]['rdate'];?>
</li>
										<li><i class="fa fa-chain-broken"></i> Achivements Points : Soon</li>
										<li><i class="fa fa-user-secret"></i> Nº Characters: Soon</li>
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
