
<?php 
 session_start();

?>
<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="indexStyle.css">
    	<link rel="shortcut icon" href="Images/icon.ico" />
	    <title>Register</title>
   </head>



<body>

  <div id="formular-wraper">

    <?php include("header.php"); ?>

	<div id="titleCreator">
		<h1>Create Account</h1>
	</div>
    

    <div id="decoration">
	<p><img src="Images/bbformular.jpg"/></p>
    </div>

<div id="formular">
	<form method="post" action="welcomePage.php">
		<p> <br>
			 <input type="text"     name="surname" placeholder=" Surname"> <br><br>
			 <input type="text"     name="name" placeholder="Name"> <br> <br>
			 <input type="email"    name="email" placeholder="email"><br> <br>
			 <input type="password" name="password" placeholder="Password"><br> <br>
			 <input type="password" name="passwordVerify" placeholder=" repeat Password"><br> <br>
			 <input type="submit"   name="register" value="Sign up"> <br><br>
            Durch deine Registrierung stimmst du unseren 
            Nutzungsbedingungen und unserer Datenrichtlinie zu.
            <p> If you have an account then <a href="log_in.php" style="color: #008B8B"> log in</a> </p>
		</p>
	</form>
</div>
<!-- footer -->
<?php include("footer.php"); ?>
   </div>
 </body>
</html>