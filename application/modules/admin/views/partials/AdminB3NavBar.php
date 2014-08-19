<?php
	//$this->firephp->log(base_url('admin'),'baseurl');
	//$this->firephp->log(site_url('admin'),'site_url');
?>

<div class="navbar navbar-default navbar-static-top" id="main-navbar" role="navigation">
	<div class="container">

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand" href="<?php echo site_url('admin/index'); ?>">admin</a>

		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">

				<li class="<?php if ( $this->uri->segment(2) == 'index' or !$this->uri->segment(2) ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/index'); ?>"><b class=".glyphicon .glyphicon-user"></b> Dashboard</a></li>
				<!--<li class="<?php if ( $this->uri->segment(2) == 'users' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/users'); ?>"><i class="icon-user icon-black"></i>Utilizadores</a></li>-->
				<li class="dropdown <?php if ( $this->uri->segment(2) == 'users' ) {?>active<?php } ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b class="caret"></b> Utilizadores
					</a>
					<ul class="dropdown-menu">
						<li class="<?php if ( $this->uri->segment(3) == 'listusers' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/users/listusers'); ?>"><i class="icon-user icon-black"></i>Listar</a></li>
						<li class="<?php if ( $this->uri->segment(3) == 'newuser' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/users/newuser'); ?>">Novo</a></li>
					</ul>
				</li>
				<li class="dropdown <?php if ( $this->uri->segment(2) == 'clients' ) {?>active<?php } ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b class="caret"></b> Clientes
					</a>
					<ul class="dropdown-menu">
						<li class="<?php if ( $this->uri->segment(3) == 'listclients' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/clients/listclients'); ?>"><i class="icon-user icon-black"></i>Listar</a></li>
						<li class="<?php if ( $this->uri->segment(3) == 'newclient' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/clients/newclient'); ?>">Novo</a></li>
					</ul>
				</li>
				<li class="<?php if ( $this->uri->segment(2) == 'timesheets' ) {?>active<?php } ?>"><a href="<?php echo site_url('Admin/timesheets'); ?>"><i class="icon-th-large icon-black"></i> Timesheets</a></li>
				<li class="<?php if ( $this->uri->segment(2) == 'tables' ) {?>active<?php } ?>"><a href="<?php echo site_url('Admin/tables'); ?>"><i class="icon-th-large icon-black"></i> Tables</a></li>
				<li class="<?php if ( $this->uri->segment(2) == 'calendar' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/calendar'); ?>"><i class="icon-calendar icon-black"></i> Calendar</a></li>
				<li class="<?php if ( $this->uri->segment(2) == 'test' ) {?>active<?php } ?>"><a href="<?php echo site_url('admin/test'); ?>"><i class="icon-leaf icon-black"></i> Test</a></li>

				<!--
				<li class=""><a href="#">lnk2</a></li>
				<li class=""><a href="#">lnk3</a></li>
				-->

				<li class="divider-vertical"></li>

				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b class="caret"></b>
						UI Elements 
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
				-->

			</ul>

			<ul class="nav navbar-nav navbar-right">
				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog icon-black"></i>Definições <b class="caret"></b>
					</a>
					<ul class="dropdown-menu" style="">
						<li><a href="<?php echo site_url('admin/systemSettings'); ?>">System</a></li>
					</ul>
				</li>
				-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user icon-black"></i> admin@mail.com <i class="caret"></i>
					</a>
					<ul class="dropdown-menu" style="">
						<li><a href="<?php echo site_url('main'); ?>">main</a></li>
						<li class="<?php if ( $this->uri->segment(2) == 'systemSettings' ) {?>active<?php } ?>">
							<a href="<?php echo site_url('admin/systemSettings'); ?>">Definições</a>
						</li> 
						<li class="divider"></li>
						<li><a href="<?php echo site_url('main'); ?>">logout</a></li>
					</ul>
				</li>
			</ul>

		</div>

	</div>
</div>

