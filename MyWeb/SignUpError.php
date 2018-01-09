
<?php 
 session_start();

?>
<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="IndexStyle.css">
    	<link rel="shortcut icon" href="Images/LT.ico" />
	    <title>Error</title>
   </head>



<body>

  <div id="formular-wraper">

    <?php include("Header.php"); ?>

	<div id="titleCreator">
		<a href="Index.php"><img src="Images/icon.jpeg" style="width: 70px; height: 70px; position: fixed;"></a>
		<h1>Create Account</h1>
		<h3 style="color: red"> Error Creating Account: 
			   <?php echo $_SESSION['error_account'] ?></h3>
	</div>
    

    <div id="decoration">
	<p><img src="Images/bbformular.jpg"/></p>
    </div>

<div id="formular">
	<form method="post" action="WelcomePage.php">
		<p> <br>
			 <input type="text"     name="surname" placeholder=" Surname"> <br><br>
			 <input type="text"     name="name" placeholder="Name"> <br> <br>
			 <input type="email"    name="email" placeholder="email"><br> <br>
			 <input type="password" name="password" placeholder="Password"><br> <br>
			 <input type="password" name="passwordVerify" placeholder=" repeat Password"><br> <br>
			 <input type="submit"   name="register" value="Sign up"> <br><br>
              By registering, you agree to our Terms of Use and our Privacy Policy.
            <p> If you have an account then <a href="LogIn.php" style="color: #808018;"> log in</a> </p>
		</p>
	</form>
</div>
<!-- footer -->
<?php include("Footer.php"); ?>
   </div>
 </body>
</html>