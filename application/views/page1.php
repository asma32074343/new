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



	</head>
	<body>

	<h3><mark>WELCOME TO OUR LIBRARY</mark></h3>
	<p>logn in </p>

	<div class="container">
	  <form action="/action_page.php">
	    <label for="usrname">Username</label>
	    <input type="text" id="usrname" name="usrname" required>

	    <label for="psw">Password</label>
	    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

	    <input type="submit" value="Submit"<a href="<?php echo base_url();?>index.php/library/fourth"></a>
>
	  </form>
	</div>

	<div id="message">
	  <h3>Password must contain the following:</h3>
	  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
	  <p id="number" class="invalid">A <b>number</b></p>

	</div>

	<script>
	var myInput = document.getElementById("psw");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");


	// When the user clicks on the password field, show the message box
	myInput.onfocus = function() {
	    document.getElementById("message").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	myInput.onblur = function() {
	    document.getElementById("message").style.display = "none";
	}

	// When the user starts to type something inside the password field
	myInput.onkeyup = function() {
	  // Validate lowercase letters
	  var lowerCaseLetters = /[a-z]/g;
	  if(myInput.value.match(lowerCaseLetters)) {
	    letter.classList.remove("invalid");
	    letter.classList.add("valid");
	  } else {
	    letter.classList.remove("valid");
	    letter.classList.add("invalid");
	  }

	  // Validate numbers
	  var numbers = /[0-9]/g;
	  if(myInput.value.match(numbers)) {
	    number.classList.remove("invalid");
	    number.classList.add("valid");
	  } else {
	    number.classList.remove("valid");
	    number.classList.add("invalid");
}

	}
	</script>




</body>
</html>
