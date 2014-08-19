<?php

	$param = array(
		'active_class' 			=>'active',
		'use_titles'			=>false,
		//'container_tag_id'	=> 'nav'
		'container_tag_class'	=> 'nav nav-pills pull-right'
		//'container_tag_class'	=>'nav'
	);

	$this->fuelmenu->initialize($param);

	$menuHTML = $this->fuelmenu->render($menu,'main',null,'basic');	

	//$this->firephp->log($menuHTML);
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Main</title>

	<?php $this->carabiner->display('bootstrap3', 'css'); ?>

	<style type="text/css">
		body { min-height: 2000px; }
		.navbar-static-top {margin-bottom: 19px; }
	</style>

</head>

<body>

	<!--<div class="container">-->

		<?php echo $template['partials']['UserMainMenu']; ?>

		<?php echo $template['body']; ?>

	<!--</div>-->

	<?php $this->carabiner->display('jquery'); ?>
	<?php $this->carabiner->display('bootstrap3','js'); ?>
	<?php $this->carabiner->display('js'); ?>
						
</body>

</html>
