
<?php 
 session_start();

?>
<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="IndexStyle.css">
    	<link rel="shortcut icon" href="Images/icon.ico" />
	    <title>Error</title>
   </head>



<body>

  <div id="formular-wraper">

    <?php include("Header.php"); ?>

	<div id="titleCreator">
		<h1>Log in</h1>
		<h3 style="color: red"> Error log in: 
			   <?php echo $_SESSION['error_log_in'] ?></h3>
	</div>
    

    <div id="decoration">
	<p><img src="Images/bbformular.jpg"/></p>
    </div>


<div id="formular"  >
	<form method="POST" action="StartPage.php">
		<p> <br>
			 <input type="email"    name="email" placeholder="email"><br> <br>
			 <input type="password" name="password" placeholder="Password"><br> <br>
			 <input type="submit"   name="loggin" value="log in"  > <br><br>
             Durch deine Registrierung stimmst du unseren 
             Nutzungsbedingungen und unserer Datenrichtlinie zu.
            <p> If you don't have an account just create one <a href="SignUp.php" 
            	style="color: #008B8B" > here </a> </p>
		</p>
	</form>
</div>
<!-- footer -->
<?php include("Footer.php"); ?>
   </div>
 </body>
</html>