
<!DOCTYPE html>
<html>
   <head>
	    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="IndexStyle.css">
    	<link rel="shortcut icon" href="Images/LT.ico" />
	    <title>Welcome <?php echo htmlspecialchars($_SESSION['surname']); ?></title>
   </head>

<!-- page body -->
<body>
  <div id="pageBody">
  <div id= "headerDecoration">
    <div class="iconImage">
      <a href="Index.php"><img src="Images/icon.jpeg"></a>
    </div>
        <nav>
          <ul class="links">
             <li><a href=" #" style="color: white"> <?php echo htmlspecialchars($_SESSION['surname']); ?>  
              LT_Wig</a></li>
             <li><a href="#" style="color: white"> Styles</a></li>
             <li><a href="#" style="color: white"> Sale</a></li>
             <li><a href="CreateYourOwnUnit.php" style="color: white"> Create your own Unit</a></li>
             <li><a href="LogOut.php" style="color: white"> Log out</a></li>
          </ul>
        </nav>
   
</div>


    <div id="blockTitle">
      <h1>Style of the day </h1> 
    </div>
<div class="flex-container">
<div class="image-container">
  <img src="Images/hair9.jpg">
  <p style="color: #87CEFA;">
Description:<p style="color: #CD5C5C;"> EUR 60</p>
  </p>
</div>

<div class="image-container">
  <img src="Images/hair4.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair8.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/hair7.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair3.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/hair1.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/1.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair9.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair6.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>



<div class="image-container">
  <img src="Images/hair5.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/hair8.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/hair7.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair3.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/hair1.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>

<div class="image-container">
  <img src="Images/1.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair9.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>


<div class="image-container">
  <img src="Images/hair6.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>



<div class="image-container">
  <img src="Images/hair5.jpg">
  <p style="color: #87CEFA;">
Description:
  </p>
</div>



</div>    
<!-- footer -->

<?php include("Footer.php"); ?>

       </div>
    </body>
</html>
