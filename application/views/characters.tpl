<!-- wrapper -->
	<div id="wrapper">
    <section class="hero parallax" style="background-image: url({$app_url}img/cover/cover_1.jpg); background-position: 50% -266.667px;">
			<div class="hero-bg"></div>
			<div class="container">
				<div class="page-header">
					<div class="page-title">User Characters</div>
				</div>
			</div>
		</section>	

        
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-sm-30">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Menu</div>
								<div class="panel-body no-padding">
									<ul class="panel-list-bordered">
										<li><a href="{$base_url}account"><i class="fa fa-dashboard"></i> Dashboard</a></li>
										<li><a href="{$base_url}characters"><i class="fa fa-user-secret"></i> My Characters</a></li>
										<li><a href="{$base_url}main/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-8 col-sm-4 hidden-xs">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Character Details</div>
								<div class="panel-body">
									{if isset($extra['nchars'])}
								
									<div class="row margin-top-40">
										{foreach from= $extra['nchars'] item=$char}
											<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin-bottom-sm-30">
												<div class="card card-game card-danger">
													<div class="card-header">{if $char.c_class == 2} Barbarian {else} Paladin {/if}</div>
													<div class="card-img">
														{if $char.c_class == 2}
															<img src="https://skylandgames.files.wordpress.com/2013/07/barbarian-spotlight-7.jpg" alt="">
														{else}
															<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdGQi51yQ6QR5szttNhnCFYAC79CbS9RRZh2mNvuzS6ykaCQ7zaaFkbKrR" alt="">
														{/if}
													</div>
													<div class="caption">
														<h3 class="card-title">{$char.c_name} Lv. {$char.c_level}</h3>
													</div>
												</div>
											</div>
										{/foreach}
									{else}	
										<p> No characters have been made yet. </p>
									{/if}
									</div>
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
	<!-- /#wrapper -->