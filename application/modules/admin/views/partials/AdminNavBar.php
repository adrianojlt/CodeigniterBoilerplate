<?php
	//$this->firephp->log(site_url('admin/index'),'url');
?>

<div class="navbar navbar-fixed-top" id="main-navbar">
	<div class="navbar-inner">
		<div class="container">

			<button class="btn btn-navbar collapsed" type="button" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="brand" href="<?php echo site_url('admin/index'); ?>">admin</a>

			<div class="nav-collapse collapse navbar-responsive-collapse">

				<ul class="nav">

					<li class="<?php if ( $this->uri->segment(2) == 'index' or !$this->uri->segment(2) ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/index'); ?>"><i class="icon-time icon-black"></i> Dashboard</a></li>
					<li class="<?php if ( $this->uri->segment(2) == 'users' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/users'); ?>"><i class="icon-user icon-black"></i> Users</a></li>
					<li class="<?php if ( $this->uri->segment(2) == 'tables' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/tables'); ?>"><i class="icon-th-large icon-black"></i> Tables</a></li>
					<li class="<?php if ( $this->uri->segment(2) == 'calendar' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/calendar'); ?>"><i class="icon-calendar icon-black"></i> Calendar</a></li>
					<li class="<?php if ( $this->uri->segment(2) == 'test' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/test'); ?>"><i class="icon-leaf icon-black"></i> Test</a></li>
					<!--
					<li class=""><a href="#">lnk2</a></li>
					<li class=""><a href="#">lnk3</a></li>
					-->

					<li class="divider-vertical"></li>

					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							UI Elements <!--<i class="caret"></i>-->
							<i class="icon-fire"></i>
						</a>

						<ul class="dropdown-menu">
							<li><a href="#">Typography</a></li>
							<li><a href="#">Buttons and Labels</a></li>
							<li><a href="#">Lists</a></li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Forms</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>

					</li>

					<li class="divider-vertical"></li>

				</ul>

				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog icon-black"></i> Settings <i class="caret"></i>
						</a>
						<ul class="dropdown-menu" style="">
							<li><a href="<?php echo site_url('admin/systemSettings'); ?>">System</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-black"></i> admin@mail.com <i class="caret"></i>
						</a>
						<ul class="dropdown-menu" style="">
							<li><a href="<?php echo site_url('main'); ?>">main</a></li>
							<li><a href="<?php echo site_url('main'); ?>">logout</a></li>
						</ul>
					</li>
				</ul>

			</div>

		</div>
	</div>
</nav>

