<?php 
 session_start();

?>


<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="indexStyle.css">
    	<link rel="shortcut icon" href="Images/icon.ico" />
	    <title>Welcome <?php echo htmlspecialchars($_SESSION['surname']); ?></title>
   </head>



<body>



    <?php include("header.php");
   
     if (isset($_POST['password']) && (($_POST['password'] != $_POST['passwordVerify']))) {
    	 echo "The password are not similar...."; 
    	 print_r( $_SESSION["surname"]);
    	}

     if (empty($_POST['password']) && eval($_POST['password']) < 5 ) {
     	echo "password to short."; 
     	print_r($_SESSION["surname"]);
       }

    ?>


<!-- footer -->
<?php include("footer.php"); ?>

 </body>
</html>