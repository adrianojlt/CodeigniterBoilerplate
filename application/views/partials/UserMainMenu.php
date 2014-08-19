<?php
	//$this->firephp->log(site_url('admin/index'),'url');
?>
<div class="navbar navbar-default navbar-static-top" role="navigation">

	<!--<div class="container-fluid">-->
	<div class="container">

	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	      	</button>
	     	<a class="navbar-brand" href="#">InforSilva</a>
	  	</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

	    	<ul class="nav navbar-nav">

				<li class="<?php if ( $this->uri->segment(2) == 'index' or !$this->uri->segment(2) ) {?>active<?php } ?>">
					<a href="<?php echo site_url('user/index'); ?>">Principal</a>
				</li> 
				<li class="<?php if ( $this->uri->segment(2) == 'timesheet' ) {?>active<?php } ?>">
					<a href="<?php echo site_url('user/timesheet'); ?>">Timesheet</a>
				</li> 
				<li class="<?php if ( $this->uri->segment(2) == 'client' ) {?>active<?php } ?>">
					<a href="<?php echo site_url('user/client'); ?>">Cliente</a>
				</li> 
				<li class="<?php if ( $this->uri->segment(2) == 'calendar' ) {?>active<?php } ?>">
					<a href="<?php echo site_url('user/calendar'); ?>">Calendario</a>
				</li> 

	        	<!--
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
		        	<ul class="dropdown-menu" role="menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
		        	</ul>
		     	</li>
		     	-->

	      	</ul>
	      
	 		<ul class="nav navbar-nav navbar-right">
		      	<!-- <li><a href="#">Link</a></li> -->
		        <li class="dropdown">
		       		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo site_url('main'); ?>">Página Principal</a></li>
						<li class="<?php if ( $this->uri->segment(2) == 'setting' ) {?>active<?php } ?>">
							<a href="<?php echo site_url('user/setting'); ?>">Definições</a>
						</li> 
						<li class="divider"></li>
						<li><a href="#">logout</a></li>
					</ul>
		        </li>
	      	</ul>

	    </div><!-- /.navbar-collapse -->

	<!--</div>--><!-- /.container-fluid -->
	</div><!-- /.container -->

</div>	
