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

					 if( document.forms["adduser"]["Username"].value == "" )
					 {
							alert( "Please provide username!" );
							return false;
					 }

					 if( document.forms["adduser"]["Password"].value == "" )
					 {
							alert( "Please providepassword!" );
							return false;
					 }
					 if( document.forms["adduser"]["Email"].value == "" )
					{
						 alert( "Please provide email !" );
						 return false;
					}
					 if( document.forms["adduser"]["Bank-number"].value < 0 )
					 {
							alert( "Please provide that bank-number existe!" );
							return false;
					 }
					 if( document.forms["adduser"]["Name"].value == "" )
				 {
						alert( "Please provide name !" );
						return false;
				 }
				 if( document.forms["adduser"]["address"].value == "" )
				{
					 alert( "Please provide adress !" );
					 return false;
				}

				}
		 //-->
	</script>
	</head>
	<body>
	<div><h1>Add user</h1></div>
	<?php
	if(isset($result))
	{
		echo " user added successfully";
	}
	else {
		echo '<form name="addadmin" action="'. base_url().'index.php/library/page4" onsubmit="return validateForm()" method="post">
    username: <input type="text" name="username"><br>
		password: <input type="text" name="password"><br>
		bank-number: <input type="text" name="bank-number"><br>
		Email: <input type="text" name="email"><br>
		name: <input type="text" name="name"><br>
		adress: <input type="text" name="adress"><br>

				<input type="submit" value="Submit">
			</form>';
	}
	?>






	</body>
	</html>
