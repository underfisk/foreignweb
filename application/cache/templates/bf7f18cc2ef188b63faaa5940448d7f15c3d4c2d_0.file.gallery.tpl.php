<?php
/* Smarty version 3.1.30, created on 2018-02-12 03:40:21
  from "E:\xampp\htdocs\rpg_web\application\views\gallery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80fe95030051_82176303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf7f18cc2ef188b63faaa5940448d7f15c3d4c2d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\gallery.tpl',
      1 => 1518403220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a80fe95030051_82176303 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/ekko-lightbox/ekko-lightbox.min.css" rel="stylesheet">
<!-- wrapper -->
	<div id="wrapper">	
		<section class="hero" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/cover/cover.jpg);">
			<div class="hero-bg-primary"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">Galleries</div>
					<ol class="breadcrumb">
						<li><a href="index-2.html">Home</a></li>
						<li><a href="#">Page</a></li>
						<li class="active">Gallery</li>
					</ol>	
				</div>
			</div>
		</section>
	
		<section class="border-bottom-1 border-grey-300 padding-30">
			<div class="container text-center">
				<h2 class="font-size-22 font-weight-300">Choose from <span class="font-weight-500">12.000</span> available pictures</h2>
			</div>
		</section>
		
		<section class="bg-grey-50 padding-top-40 padding-xs-15">
			<div class="container margin-bottom-30">
				<ul id="filter" class="filter">
					<li><a href="#" data-filter="*" class="active">All</a></li>
					<li><a href="#" data-filter="#ps4">Playstation 4</a></li>
					<li><a href="#" data-filter="#xbox">Xbox One</a></li>
					<li><a href="#" data-filter="#pc">PC / Desktop</a></li>
					<li><a href="#" data-filter="#steam">Steam Machine</a></li>
				</ul>
			</div>
			
			<div class="container gallery">
				<div class="row isotope masonry">
					<div id="pc" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/1.jpg" alt="">
							<figcaption>
								<h2>Ezio <span>Auditore</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-1.jpg" data-title="Ezio Auditore" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>			
						</figure>
					</div>
		
					<div id="ps4" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/2.jpg" alt="">
							<figcaption>
								<h2>Dead<span>Pool</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-2.jpg" data-title="DeadPool" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>	
						</figure>
					</div>
		
					<div id="steam" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/3.jpg" alt="">
							<figcaption>
								<h2>Guar<span>dians</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-3.jpg" data-title="Guardians of the Galaxy" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>		
						</figure>
					</div>
		
					<div id="xbox" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/4.jpg" alt="">
							<figcaption>
								<h2>GTA <span>5</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-4.jpg" data-title="Grand Theft Auto 5" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>		
						</figure>
					</div>
		
					<div id="ps4" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/5.jpg" alt="">
							<figcaption>
								<h2>Uncharted <span>4</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-5.jpg" data-title="Uncharted 4" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>			
						</figure>
					</div>
					
					<div id="pc" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/6.jpg" alt="">
							<figcaption>
								<h2>Vice <span>City</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-6.jpg" data-title="Vice City" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>			
						</figure>
					</div>
		
					<div id="ps4" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/7.jpg" alt="">
							<figcaption>
								<h2>Max <span>Payne</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-7.jpg" data-title="Max Payne" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>			
						</figure>
					</div>
		
					<div id="xbox" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 grid">
						<figure class="img-hover">
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/8.jpg" alt="">
							<figcaption>
								<h2>Witcher <span>3</span></h2>
								<p>Sadie never took her eyes.</p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/gallery/lg-8.jpg" data-title="Witcher 3" data-toggle="lightbox" data-gallery="multiimages"></a>
							</figcaption>			
						</figure>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- /#wrapper -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/isotope/jquery.isotope.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/ekko-lightbox/ekko-lightbox.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/masonry/imagesloaded.pkgd.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/masonry/masonry.pkgd.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	(function($) {
	"use strict";
		var $container = $('.masonry');
		$($container).imagesLoaded( function(){
			$($container).masonry({
				itemSelector: '.grid', 
				columnWidth: '.grid'
			});
		});
			
		/*	Lightbox
		/*----------------------------------------------------*/
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { 
			event.preventDefault(); 
			$(this).ekkoLightbox();
		}); 
		
		/*	Isotope
		/*----------------------------------------------------*/
		$.fn.hideReveal = function( options ) {
		  options = $.extend({
			filter: '*',
			hiddenStyle: { opacity: 0.05 },
			visibleStyle: { opacity: 1 },
		  }, options );
		  this.each( function() {
			var $items = $(this).children();
			var $visible = $items.filter( options.filter );
			var $hidden = $items.not( options.filter );
			// reveal visible
			$visible.animate( options.visibleStyle );
			// hide hidden
			$hidden.animate( options.hiddenStyle );
		  });
		};

		var $container = $('.isotope');
		var $container_masonry = $('.masonry');
			  $container_masonry.imagesLoaded( function(){
				$container_masonry.isotope({
				filter: '*',
				animationOptions: {
				  easing: 'linear',
				  queue: false,
			   }
			});
		});
		
		// filter functions
		var filterFns = {
			// show if number is greater than 50
			numberGreaterThan50: function() {
			  var number = $(this).find('.number').text();
			  return parseInt( number, 10 ) > 50;
			},
			// show if name ends with -ium
			ium: function() {
			  var name = $(this).find('.name').text();
			  return name.match( /ium$/ );
			}
		};
  
		// bind filter button click
		$('#filter').on( 'click', 'a', function() {
			var filterValue = $( this ).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[ filterValue ] || filterValue;
			$container.hideReveal({ filter: filterValue });
			$container_masonry.hideReveal({ filter: filterValue });
			return false;
		  });

		// change is-checked class on buttons
		$('#filter').each( function( i, buttonGroup ) {
			var $buttonGroup = $( buttonGroup );
			$buttonGroup.on( 'click', 'a', function() {
			  $buttonGroup.find('.active').removeClass('active');
			  $( this ).addClass('active');
			  return false;
			});
		});
	})(jQuery);
	<?php echo '</script'; ?>
><?php }
}
