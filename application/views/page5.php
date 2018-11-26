<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">	<meta charset="utf-8">
	<title>library</title>
</head>
<body>
	<div><h1>resutlt Item</h1></div>
	<div class="divTable">
	<div class="divTableHeading">
	<div class="divTableRow">
		<div class="divTableRow">
	  <div class="divTableHead">ietms Isbn number</div>
	  <div class="divTableHead">ietms Item title</div>
	 <div class="divTableHead">ietms number of page</div>
	 <div class="divTableHead">ietms best of the collection</div>
	 <div class="divTableHead">ietms edition</div>
	 <div class="divTableHead">ietms gener</div>
	 <div class="divTableHead">ietms date of public</div>
	 <div class="divTableHead">ietms autor</div>
	 <div class="divTableHead">ietms type</div>
	  </div>
	</div>
	</div>
	<div class="divTableBody">

	      <?php
				if(isset($items))
				{

				foreach ($ietms as $i) {

					echo '<div class="divTableRow">';
					echo '<div class="divTableCell">'.$i->ietmtitle.'</div>';
					echo '<div class="divTableCell">'.$i->isbnnumber.'</div>';
					echo '<div class="divTableCell">'.$i->numberofpage.'</div>';
					echo '<div class="divTableCell">'.$i->bestofthecollection.'</div>';
					echo '<div class="divTableCell">'.$i->edution.'</div>';
					echo '<div class="divTableCell">'.$i->gener.'</div>';
					echo '<div class="divTableCell">'.$i->dateofpublish.'</div>';
					echo '<div class="divTableCell">'.$i->autor.'</div>';
					echo '<div class="divTableCell">'.$i->type.'</div>';
					echo '</div>';
				}

			}


		?>
		<a href="<?php echo base_url();?>index.php/library/page7">update</a>
		<a href="<?php echo base_url();?>index.php/library/page8">add</a>



</body>
</html>
