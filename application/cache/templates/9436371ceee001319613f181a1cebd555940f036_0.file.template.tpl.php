<?php
/* Smarty version 3.1.30, created on 2018-01-16 21:26:03
  from "E:\xampp\htdocs\rpg_web\application\views\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5e5fdb566b45_24546523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9436371ceee001319613f181a1cebd555940f036' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\template.tpl',
      1 => 1516134363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e5fdb566b45_24546523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
   <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

   <body class="fixed-header" ng-app="tmpApp">
     <!-- Header navbar here -->
    <header>
		<div class="container">
			<span class="bar hide"></span>
			<a href="home" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/logo.png" alt=""></a>
			<nav>
				<div class="nav-control">
					<ul>
						<li>
							<a href="#" class="dropdown-toggle">Home</a>
						</li>
						
						<li class="dropdown mega-dropdown">
							<a href="#">Elements</a>
							<ul class="dropdown-menu mega-dropdown-menu row" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/content/menu.png);">
								<li class="col-md-3">
									<ul>
										<li class="dropdown-header">Typography</li>
										<li><a href="elements-typography.html"><i class="fa fa-sort-alpha-asc"></i> General Typography</a></li>
										<li><a href="elements-blockquote.html"><i class="fa fa-quote-left"></i> Blockquote</a></li>
										<li><a href="elements-helpers.html"><i class="fa fa-square-o"></i> Helper Classes</a></li>
										<li><a href="elements-testimonials.html"><i class="fa fa-bullhorn"></i> Testimonials</a></li>
										<li><a href="elements-grids.html"><i class="fa fa-th-large"></i> Grid Layouts</a></li>
										<li><a href="elements-alerts.html"><i class="fa fa-bell-o"></i> Alert & Messages</a></li>
										<li><a href="elements-labels.html"><i class="fa fa-bookmark-o"></i> Labels & Badges</a></li>
										<li><a href="elements-media.html"><i class="fa fa-image"></i> Audio, Videos & Images</a></li>
										<li><a href="elements-pagers.html"><i class="fa fa-ellipsis-h"></i> Pagination & Pagers</a></li>
									</ul>
								</li>
								<li class="col-md-3">
									<ul>
										<li class="dropdown-header">Button & Icons</li>
										<li><a href="elements-buttons.html"><i class="fa fa-flash"></i> General Buttons</a></li>
										<li><a href="elements-social-buttons.html"><i class="fa fa-thumbs-o-up"></i> Social Buttons</a></li>
										<li><a href="elements-glyphicons.html"><i class="fa fa-chevron-circle-right"></i> Glyphicons</a></li>
										<li><a href="elements-fontawesome.html"><i class="fa fa-chevron-circle-right"></i> FontAwesome</a></li>
										<li><a href="elements-ionicons.html"><i class="fa fa-chevron-circle-right"></i> IonIcons</a></li>
										<li class="dropdown-header">Components</li>
										<li><a href="elements-media-objects.html"><i class="fa fa-align-justify"></i> Media Objects</a></li>
										<li><a href="elements-page-headers.html"><i class="fa fa-align-justify"></i> Page headers</a></li>
										<li><a href="elements-wells.html"><i class="fa fa-align-justify"></i> Wells</a></li>
									</ul>
								</li>
								<li class="col-md-3">
									<ul>
										<li class="dropdown-header">Default Elements</li>
										<li><a href="elements-widgets.html"><i class="fa fa-th"></i> Widgets</a></li>
										<li><a href="elements-sections.html"><i class="fa fa-th"></i> Sections</a></li>
										<li><a href="elements-thumbnails.html"><i class="fa fa-file-o"></i> Thumbnails</a></li> 
										<li><a href="elements-cards.html"><i class="fa fa-sticky-note-o"></i> Cards</a></li>   
										<li><a href="elements-tabs.html"><i class="fa fa-external-link"></i> Accordion & Tabs</a></li>
										<li><a href="elements-timeline.html"><i class="fa fa-th-large"></i> Timeline</a></li>
										<li><a href="elements-tables.html"><i class="fa fa-th"></i> Tables</a></li>
										<li><a href="elements-progress.html"><i class="fa fa-arrows-h"></i> Progress Bars</a></li>
										<li><a href="elements-panels.html"><i class="fa fa-th"></i> Panels</a></li>
									</ul>
								</li>
								<li class="col-md-3">
									<ul>
										<li class="dropdown-header">Forms & Info</li>
										<li><a href="elements-forms.html"><i class="fa fa-align-justify"></i> Form Elements</a></li>
										<li><a href="elements-form-layouts.html"><i class="fa fa-align-justify"></i> Form Layouts</a></li>		
										<li><a href="elements-modals.html"><i class="fa fa-external-link"></i> Modals</a></li>			 	
										<li><a href="elements-carousel.html"><i class="fa fa-arrows"></i> Carousel Examples</a></li>		
										<li><a href="elements-charts.html"><i class="fa fa-bar-chart-o"></i> Charts & Countdowns</a></li>		
										<li><a href="elements-google-maps.html"><i class="fa fa-map-marker"></i> Google Maps</a></li>		                                             
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/user/avatar.jpg" alt=""> <span>Enigma</span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="#"><i class="fa fa-heart"></i> Likes <span class="label label-info">32</span></a></li>
						<li><a href="#"><i class="fa fa-gamepad"></i> Games</a></li>
						<li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
						<li class="divider"></li>
						<li><a href="login.html"><i class="fa fa-power-off"></i> Sign Out</a></li>
					</ul>
				</div>
				<div class="nav-dropdown dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="label label-danger">3</span></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header"><i class="fa fa-bell"></i> You have 5 new games</li>
						<li><a href="#">Alien Isolation</a></li>
						<li><a href="#">Witcher 3 <span class="label label-success">XBOX</span></a></li>
						<li><a href="#">Last of Us</a></li>
						<li><a href="#">Uncharted 4 <span class="label label-primary">PS4</span></a></li>
						<li><a href="#">GTA 5 <span class="label label-warning">PC</span></a></li>
						<li class="dropdown-footer"><a href="#">View all games</a></li>
					</ul>
				</div>
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

     <!-- content target here -->
  	<div ng-view></div>
	   <!-- Ajax content starts here -->



   </body>
   <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</html>
<?php }
}
