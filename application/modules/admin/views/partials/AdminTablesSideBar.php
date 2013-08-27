<?php
	//$this->firephp->log($this->uri->segment(3));
?>
<ul class="nav nav-pills nav-stacked">
	<li class="<?php if ( $this->uri->segment(3) == 'jtable' or !$this->uri->segment(3) ) {?>active<?php } ?>"><a href="<?php echo site_url('Admin/tables/jtable'); ?>">jtable</a></li>
	<li class="<?php if ( $this->uri->segment(3) == 'datatables' ) {?>active<?php } ?>"><a href="<?php echo site_url('Admin/tables/datatables'); ?>">datatables</a></li>
</ul>