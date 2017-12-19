<?php 
 session_start();

?>

<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="indexStyle.css">
    	<link rel="shortcut icon" href="Images/icon.ico" />
	    <title>HairStyle</title>
   </head>



<body>
    <?php include("header.php");

      if (!isset($_POST['email']) && !isset($_POST['password'])
          && empty($_POST['email']) && empty($_POST['password'])) {

      	echo ' Please type in your email and your password.';
     
      }else{
      	$login = true;
      }
      	
     ?>

<!-- footer -->
<?php include("footer.php"); ?>

 </body>
</html>