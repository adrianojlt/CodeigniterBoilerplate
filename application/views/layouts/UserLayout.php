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

	<meta charset="utf-8">
	
	<title>Main</title>

	<?php
		$this->carabiner->display('jquery');
		$this->carabiner->display('bootstrap');
	?>

	<style type="text/css">

		body {padding-top: 20px; padding-bottom: 40px; }

		/* Custom container */
		.container-narrow {margin: 0 auto; max-width: 700px; }

		.container-narrow > hr {margin: 30px 0; }
	</style>

</head>

<body>
	<div class="container-narrow">

		<div class="masthead">
			<?//php echo $menuHTML; ?>
			<h3 class="muted">Project Name</h3>
		</div>

		<hr>

		<?php echo $template['body']; ?>

	</div>
						
</body>

</html>
