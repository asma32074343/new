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

					 if( document.forms["addstudent"]["Username"].value == "" )
					 {
							alert( "Please provide username!" );
							return false;
					 }

					 if( document.forms["addstudent"]["Password"].value == "" )
					 {
							alert( "Please providepassword!" );
							return false;
					 }
					 if( document.forms["addstudent"]["Email"].value == "" )
					{
						 alert( "Please provide email !" );
						 return false;
					}
					 if( document.forms["addstudent"]["ID"].value < 0 )
					 {
							alert( "Please provide student age greater than 0!" );
							return false;
					 }

				}
		 //-->
	</script>
	</head>
	<body>
	<div><h1>Add admin</h1></div>
	<?php
	if(isset($result))
	{
		echo " admin added successfully";
	}
	else {
		echo '<form name="addadmin" action="'. base_url().'index.php/library/fourth" onsubmit="return validateForm()" method="post">
    username: <input type="text" name="username"><br>
		password: <input type="text" name="password"><br>
		ID: <input type="text" name="id"><br>
		Email: <input type="text" name="email"><br>

				<input type="submit" value="Submit">
			</form>';
	}
	?>






	</body>
	</html>
