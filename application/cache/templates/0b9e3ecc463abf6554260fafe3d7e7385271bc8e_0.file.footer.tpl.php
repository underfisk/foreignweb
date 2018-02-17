<?php
/* Smarty version 3.1.30, created on 2018-01-16 14:25:11
  from "E:\xampp\htdocs\rpg_web\application\views\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5dfd37320c13_15653709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b9e3ecc463abf6554260fafe3d7e7385271bc8e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\footer.tpl',
      1 => 1516047073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5dfd37320c13_15653709 (Smarty_Internal_Template $_smarty_tpl) {
?>
	
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">About GameForest</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra mattis arcu, a congue leo malesuada eu. Nam nec mauris ut odio tristique varius et eu metus. Quisque massa purus, aliquet quis blandit et, <br /> <br />mollis sed lorem. Sed vel tincidunt elit. Phasellus at varius odio, sit amet fermentum mauris.</p>
				</div>
					
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title">Categories</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
							<ul class="nav">
								<li><a href="#">Playstation 4</a></li>
								<li><a href="#">XBOX ONE</a></li>
								<li><a href="#">PC</a></li>
								<li><a href="#">PS3</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="nav">
								<li><a href="#">Gaming</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">Videos</a></li>
								<li><a href="#">Reviews</a></li>
							</ul>
						</div>
					</div>
				</div>
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<h4 class="title">Email Newsletters</h4>
					<p>Subscribe to our newsletter and get notification when new games are available.</p>
					<form method="post" class="btn-inline form-inverse">
						<input type="text" class="form-control" placeholder="Email..." />
						<button type="submit" class="btn btn-link"><i class="fa fa-envelope"></i></button>
					</form>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">	
				<ul class="list-inline">
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Google"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow us on Steam"><i class="fa fa-steam"></i></a></li>
				</ul>
				&copy; 2017 Enigma Productions. All rights reserved.
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
					Don't have Gameforest account? <a href="register.html">Sign Up Now</a>
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
