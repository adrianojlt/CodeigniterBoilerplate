<?php
	//$this->firephp->log(base_url('admin'),'baseurl');
	//$this->firephp->log(site_url('admin'),'site_url');
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Admin</title>

    <?php
		$this->carabiner->display('bootstrap3','css');
		$this->carabiner->css('admin/sb-admin-2.css');
		$this->carabiner->display('css');
		foreach ( $assets as $lib ) {$this->carabiner->display($lib,'css'); }
    ?>

    <!-- bootstrap adjustment -->
	<style type="text/css">
		body {
        	/*padding-top: 40px;*/
        	/*padding-bottom: 40px;*/
        	min-height: 2000px;
      	}
      	.navbar-static-top {margin-bottom: 19px; }
      	/* .sidebar-nav {padding: 9px 0; } */
    </style>

    <script> window.ajaxUrl = "<?php echo site_url('admin');?>"; </script>

</head>

<body>

	<?php echo $template['partials']['AdminNavBar']; ?>
	<?php //echo $template['partials']['AdminSideBar']; ?>
	<?php echo $template['body']; ?>

	<?php $this->carabiner->display('jquery'); ?>
	<?php $this->carabiner->display('bootstrap3','js'); ?>
	<?php $this->carabiner->display('js'); ?>
	<?php foreach ( $assets as $lib ) { $this->carabiner->display($lib,'js'); } ?>

</body>

</html>
