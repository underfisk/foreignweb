<!-- wrapper -->
	<div id="wrapper">
    <section class="hero parallax" style="background-image: url({$app_url}img/cover/cover_2.jpg); background-position: 50% -266.667px;">
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

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-sm-30">
						<div class="widget">
							<div class="panel panel-default">
								<div class="panel-heading">Menu</div>
								<div class="panel-body no-padding">
									<ul class="panel-list-bordered">
										<li><a><i class="fa fa-edit"></i> Change Details</a></li>
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
								<div class="panel-heading">Account Details</div>
								<div class="panel-body">
									Your account is {if $extra['acc_data'][0]['banned'] == 0}<b>In good standing</b>{else}<b>In a bad standing banned</b>{/if} just continue playing fairly and enjoying the game.
									<ul class="panel-list margin-top-25">
										<li><i class="fa fa-envelope"></i> Email: {$extra['acc_data'][0]['email']}</li>
										<li><i class="fa fa-paper-plane-o"></i> Status: {if $extra['acc_data'][0]['validated'] == 1}<b>Activated</b>{else}<b>Not verified</b>{/if}</li>
										<li><i class="fa fa-calendar"></i> Join date: {$extra['acc_data'][0]['rdate']}</li>
										<li><i class="fa fa-chain-broken"></i> Achivements Points : Soon</li>
										<li><i class="fa fa-user-secret"></i> Nº Characters: {$extra['chars_count']}</li>
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
	<!-- /#wrapper -->