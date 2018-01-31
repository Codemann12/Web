<?php 
if ($_SESSION['login'] == false) { ?>
  <div id= "headerDecoration">
    <div class="iconImage">
      <a href="Index.php"><img src="Images/icon.jpeg"></a>
    </div>
        <nav>
          <ul class="links">
             <li><a href="LogIn.php"> My HairStyle</a></li>
             <li><a href="#"> Styles</a></li>
             <li><a href="#"> Sale</a></li>
             <li><a href="CreateYourOwnUnit.php"> Create your own Unit</a></li>
             <li><a href="LogIn.php"> Log in</a></li>
             <li><a href="SignUp.php"> Sign up</a></li>
          </ul>
        </nav>
</div>
<?php } else { ?>
<div id= "headerDecoration">
   <div class="iconImage">
      <a href="Index.php"><img src="Images/icon.jpeg"></a>
   </div>
        <nav>
          <ul class="links">
             <li><a href="Index.php"> <?php echo htmlspecialchars($_SESSION['name']); ?> HairStyle</a></li>
             <li><a href="#"> Styles</a></li>
             <li><a href="#"> Sale</a></li>
             <li><a href="CreateYourOwnUnit.php"> Create your own Unit</a></li>
             <li><a href="LogOut.php"> Log out</a></li>
          </ul>
        </nav>
</div>
<?php
}  ?>