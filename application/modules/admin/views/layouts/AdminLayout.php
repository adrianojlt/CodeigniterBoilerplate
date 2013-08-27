<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Admin</title>

	<!-- bootstrap adjustment -->
	<style type="text/css">
		body {
        	padding-top: 40px;
        	padding-bottom: 40px;
      }
      /* .sidebar-nav {padding: 9px 0; } */
    </style>

	<?php
		$this->carabiner->display('jquery');
		$this->carabiner->display('bootstrap2.3.1');
		$this->carabiner->display();
	?>
	
</head>

<body>
	<?php echo $template['partials']['AdminNavBar']; ?>
	<?php echo $template['partials']['AdminSideBar']; ?>
	<?php echo $template['body']; ?>
</body>

</html>
