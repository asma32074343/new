<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">	<meta charset="utf-8">
	<title>library</title>
	<script type="text/javascript">
		 <!--
				// Form validation code will come here.
				function validateForm()
				{

					 if( document.forms["addbook"]["isbn number"].value == "" )
					 {
							alert( "Please provide username!" );
							return false;
					 }

					 if( document.forms["addbook"]["item number"].value == "" )
					 {
							alert( "Please provide item number!" );
							return false;
					 }
					 if( document.forms["addbook"]["best of collection"].value == "" )
					{
						 alert( "Please provide if it is in the best collection !" );
						 return false;
					}
					 if( document.forms["addbook"]["	item title"].value < 0 )
					 {
							alert( "Please provide the item title!" );
							return false;
					 }
					 if( document.forms["addbook"]["auter "].value == "" )
					{
						 alert( "Please provide auter!" );
						 return false;
					}
					if( document.forms["addbook"]["gener"].value == "" )
					{
						 alert( "Please provide gener!" );
						 return false;
					}
					if( document.forms["addbook"]["type"].value == "" )
					{
						 alert( "Please provide type!" );
						 return false;
					}
					if( document.forms["addbook"]["date of publish"].value == "" )
					{
						 alert( "Please provide date of publish!" );
						 return false;
					}
					if( document.forms["addbook"]["edition"].value == "" )
					{
						 alert( "Please provide edition!" );
						 return false;
					}
					if( document.forms["addbook"]["date of publish"].value == "" )
					{
						 alert( "Please provide date of publish!" );
						 return false;
					}
					if( document.forms["addbook"]["number of page"].value == "" )
					{
						 alert( "Please provide number of page!" );
						 return false;
					}





				}
		 //-->
	</script>
	</head>
	<body>
	<div><h1>Add book</h1></div>
	<?php
	if(isset($result))
	{
		echo " admin added successfully";
	}
	else {
		echo '<form name="addadmin" action="'. base_url().'index.php/library/add_admin" onsubmit="return validateForm()" method="post">
    isbn number: <input type="text" name="isbn number"><br>
		item title: <input type="text" name="	item title"><br>
		best of collection: <input type="text" name="best of collection"><br>
		auter: <input type="text" name="auter"><br>
		gener: <input type="text" name="gener"><br>
		type: <input type="text" name="type"><br>
		date of publish: <input type="text" name="date of publish"><br>
   	edition: <input type="text" name="edition"><br>
  	number of page: <input type="text" name="number of age"><br>

				<input type="submit" value="Submit">
			</form>';
	}
	?>






	</body>
	</html>
