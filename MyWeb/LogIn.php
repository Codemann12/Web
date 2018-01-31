<?php 
 session_start();
 $_SESSION['login'] =false;
?>


<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="IndexStyle.css?version=51">
    	<link rel="shortcut icon" href="Images/LT.ico" />
	    <title>log in</title>
   </head>

<body >

<div id="formular-wraper">
 <?php include("Header.php"); ?>
<div id="titleCreator">
   <a href="Index.php"><img src="Images/icon.jpeg" style="width: 70px; height: 70px; position: fixed;"></a>
   <h1>Log in</h1>
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
             By registering, you agree to our Terms of Use and our Privacy Policy.
            <p> If you don't have an account just create one <a href="SignUp.php" 
            	style=" color: #808018;" > here </a> </p>
		</p>
	</form>
</div>


<!-- footer -->
<?php include("Footer.php"); ?>
   </div>
 </body>
</html>