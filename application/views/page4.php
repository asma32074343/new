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
	<div><h1>Search the IETM </h1></div>

	<form action="<?php echo base_url(); ?>index.php/library/page5" method="post">
    Name: <input type="text" name="Name"><br>
		Autor: <input type="text" name="Autor"><br>
		Gener: <input type="text" name="Gener"><br>
		type: <input type="text" name="type"><br>
   <input type="submit" value="Submit">
 </form>
 <?php
 if(isset($ietms))
 {
	 if(count($ietmst) == 0)
	 {
		 echo "no results found";
	 }
	 else {
	 	echo '<div><h1>Search result</h1></div>
	  <div class="divTable">
	  <div class="divTableHeading">
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
	  <div class="divTableBody">';


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
	  	echo"</div></div>";
	 }

	}
 ?>
</body>
</html>
