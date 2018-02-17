<?php
/* Smarty version 3.1.30, created on 2018-02-12 03:15:28
  from "E:\xampp\htdocs\rpg_web\application\views\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80f8c0845c43_38327925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf381715f31ec0c8eaf9a6290831a83ef30d699e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\home.tpl',
      1 => 1518401727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a80f8c0845c43_38327925 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- wrapper --> 
<div>
	<div id="wrapper">	
		<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#full-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#full-carousel" data-slide-to="1"></li>
				<li data-target="#full-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active inactiveUntilOnLoad">
					<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/slideshow/1.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 bounceInDown">Destroy the great chaos</h1>
							<p data-animation="animated animate7 fadeInUp">The world is in chaos. The air is thick with tension and the smoke of burnt villages. Join the biggest barbarian game and help protecting the villages agains't the evil ones</p>
						</div>		
					</div>
				</div>
				
				<div class="item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/slideshow/2.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeInDown">Explore our world</h1>
							<p data-animation="animated animate7 fadeIn">Survive in the dark world of Foreign Sword and explore all the zones by killing every monster to protect the legion.</p>
						</div>
					</div>
				</div>
				
				<div class="item">
					<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/slideshow/3.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h1 data-animation="animated animate1 fadeIn">Gain Knowledge</h1>
							<p data-animation="animated animate7 fadeIn">By helping our ancient ones you'll be able to complete the story line quests and understand better why the evil forces are invading us</p>
						</div>
					</div>
				</div>
							
				<a class="left carousel-control" href="#full-carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#full-carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>


		<section class="elements">
			<div class="container">
				<h3>About the game</h3>
				<p>Foreign Sword is a SandBox MMORPG, top-down camera style, click to play and with awesome features made by a <b>Diablo Franchise</b> game fan</p>
				<div class="vertical-tab">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#vtab1" data-toggle="tab">Main Mechanisms</a></li>
						<li><a href="#vtab2" data-toggle="tab">Quest/Reward System</a></li>
						<li><a href="#vtab3" data-toggle="tab">Leveling</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="vtab1">
							<p>The game is made using mainly the mouse controller which means main actions are controller by the mouse. The movement system is click-to-move, the skills are with keyboard, the dialogue system is with the mouse and combat system will be the combination of both.</p>
							This game is no different of others top-down games in terms of mechanims but in terms of content it is pretty different, also bringing some new features.
						</div>
						<div class="tab-pane fade" id="vtab2">
							<p>In <b>Foreign Sword</b>, the quests are given by NPC's with a story line order to show the players the "Living World" and by so we wan't the quests to give awesome rewards to players but also to show them our game story.</p>
							At the quest jorney you'll find a lot of NPC's which will be friendly, enemy or neutral and according to that they will behave.
						</div>
						<div class="tab-pane fade" id="vtab3">
							<p>Our system is pretty much the normal one of an RPG, the exp is given when a monster is killed, when a quest is complete and by helping thhe villagers at their own dutys.</p>
							<p>A good feature is that we don't have a level cap meaning that the player can scale without max-level but after level 50 the exp will be very hard to be obtained</p>
						</div>
					</div>	
				</div>	
			</div>
		</section>
		<section class="bg-grey-50 border-bottom-1 border-grey-200 relative">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="title outline">
							<h4><i class="fa fa-code"></i> Changelogs </h4>
							<p>Here will show the latest news, updates or features added/edit on our game</p>
						</div>
					</div>
				</div>
				<div class="row">
				
				<!-- Notices content here -->
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['ndata'], 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="card card-hover">
								<div class="card-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/blog/md/1.jpg" alt="">
									<div class="category">
										<?php if ($_smarty_tpl->tpl_vars['x']->value['ncategory'] == "1") {?>
											<span class="label label-warning">News</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['ncategory'] == "2") {?>
											<span class="label label-success">Updates</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['ncategory'] == "3") {?>
											<span class="label label-primary">Development</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['ncategory'] == "4") {?>
											<span class="label label-danger">Events</span>
										<?php }?>
									</div>
									<div class="meta"><a href="games-single.html"><i class="fa fa-heart-o"></i> <span>15</span></a></div>
								</div>
								<div class="caption">
									<h3 class="card-title"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
blog/view/id_here"><?php echo $_smarty_tpl->tpl_vars['x']->value['ntitle'];?>
</a></h3>
									<ul>
										<li>March 11, 2016</li>
									</ul>
									<p><?php echo $_smarty_tpl->tpl_vars['x']->value['ncontent'];?>
</p>
								</div>
							</div>
					</div>
				 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<!--<div class="text-center"><a href="games.html" class="btn btn-primary btn-lg btn-shadow btn-rounded btn-icon-right margin-top-10 margin-bottom-20">Show More <i class="fa fa-angle-right"></i></a></div>
				-->
			</div>
		</section>
	</div>
	<!-- /#wrapper -->
</div> <!-- /#ngapp  --><?php }
}
