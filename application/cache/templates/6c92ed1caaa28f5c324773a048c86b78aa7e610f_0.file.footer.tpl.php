<?php
/* Smarty version 3.1.30, created on 2018-02-12 02:56:16
  from "E:\xampp\htdocs\rpg_web\application\views\static\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80f440112547_94974742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c92ed1caaa28f5c324773a048c86b78aa7e610f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\static\\footer.tpl',
      1 => 1518400566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a80f440112547_94974742 (Smarty_Internal_Template $_smarty_tpl) {
?>
	
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">About Foreign Sword</h4>
					<p>This game was made for a final project which will be shown to public very soon, it was made using <b>Unity3d</b> game engine. More information coming soon about the game and about future projects</p>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">	
				<ul class="list-inline">
					<li><a target="_blank" href="https://twitter.com/blockleflicks" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://github.com/underfisk" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on GitHub"><i class="fa fa-github"></i></a></li>
					<li><a target="_blank" href="https://steamcommunity.com/id/enigmadkv" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Steam"><i class="fa fa-steam"></i></a></li>
				</ul>
				&copy; 2018 <i>Enigma Productions.</i> All rights reserved.
			</div>
		</div>
	</footer>	
	<!-- /.footer -->
	
	<div id="signin" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title"><i class="fa fa-user"></i> Sign In to Gameforest</h3>
				</div>
				<div class="modal-body">
					<a class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Connect with Facebook</a>
					<div class="separator"><span>or</span></div>								
					<form>
						<div class="form-group input-icon-left">
							<i class="fa fa-user"></i>
							<input type="text" class="form-control" name="username" placeholder="Username">
						</div>
						<div class="form-group input-icon-left">
							<i class="fa fa-lock"></i>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="button" class="btn btn-primary btn-block">Sign In</button>
									
						<div class="form-actions">
							<div class="checkbox">
								<input type="checkbox" id="checkbox"> 
								<label for="checkbox">Remember me</label>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer text-left">
					Don't have Gameforest account? <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
register">Sign Up Now</a>
				</div>
			</div>
		</div>
	</div><!-- /.modal --> 
	
	<!-- Javascript Libs -->
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/bootstrap.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/core.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/owl.carousel.min.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	<?php echo '</script'; ?>
><?php }
}
