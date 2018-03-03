<?php 
 session_start();
 $_SESSION['login'] =false; // redirect logOut to a different page and remove this declaration
?>
<!DOCTYPE html>
<html>

 <!-- page head -->
<head>
 <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="IndexStyle.css">
   <link rel="stylesheet" type="text/css" href="BuyStyle.css">
   <div id="icon">
   <link rel="shortcut icon" href="Images/LT.ico" />
   </div>
 <title>LT_Wig</title>
</head>


<!-- page body -->
<body>
<?php include 'HeaderDecoration.php'; ?>

<div class="differentImg">
<script src="js/Mousquetaires.js"></script>

</div>


</body>
<?php
include 'Footer.php';
?>
</html>