<!DOCTYPE html>
<html lang="en">
   {$header}
   <body class="fixed-header" >
     <!-- Header navbar here -->
    <header>
		<div class="container">
			<span class="bar hide"></span>
			<nav>
				<div class="nav-control">
					<ul>
						<li>
							<a href="{$base_url}" class="dropdown-toggle">Home</a>
						</li>
						<li>
							<a href="{$base_url}download" class="dropdown-toggle">Download</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="nav-right">
				{if $isOnline}
				<div class="nav-profile dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{$app_url}img/user/avatar.jpg" alt=""> <span>{$CI->session->userdata('usr')}</span></a>
					<ul class="dropdown-menu">
						<li><a href="{$base_url}account"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="{$base_url}characters"><i class="fa fa-gamepad"></i> Characters</a></li>
						<li class="divider"></li>
						<li><a href="{$base_url}main/logout"><i class="fa fa-power-off"></i> Sign Out</a></li>
					</ul>
				</div>
				<div class="nav-dropdown dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="label label-danger">3</span></a>
					<ul class="dropdown-menu">
					<!-- order them by type and just get the top 5-->
						<li class="dropdown-header"><i class="fa fa-bell"></i> You have 5 new notifications</li>
						<li><a href="#">Account activation</a></li>
						<li><a href="#">New character created <span class="label label-success">Characters</span></a></li>
						<li><a href="#">Name of it obtained <span class="label label-primary">Achivement</span></a></li>
						<li><a href="#">Reached max level <span class="label label-primary">Achivement</span></a></li>
						<li><a href="#">New login detected <span class="label label-warning">Account</span></a></li>
						<li class="dropdown-footer"><a href="#">View all</a></li>
					</ul>
				</div>
				{else}
					<!-- login/register here -->
					<nav>
						<div class="nav-control">
							<ul>
								<li>
									<a href="{$base_url}login"  class="dropdown-toggle">Login/Register</a>
								</li>
							</ul>
						</div>
					</nav>
				{/if}
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

	{$page}

   </body>
   {$footer}
</html>
