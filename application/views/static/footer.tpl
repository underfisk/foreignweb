	
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
					Don't have Gameforest account? <a href="{$base_url}register">Sign Up Now</a>
				</div>
			</div>
		</div>
	</div><!-- /.modal --> 
	
	<!-- Javascript Libs -->
	<script src='{$app_url}js/vendors/bootstrap.min.js'></script>
	<script src='{$app_url}js/vendors/core.min.js'></script>
	<script src='{$app_url}js/vendors/owl.carousel.min.js'></script>
	<script>
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
	</script>