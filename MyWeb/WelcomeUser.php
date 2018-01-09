
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
             <li><a href=" #"> <?php echo htmlspecialchars($_SESSION['surname']); ?>  
              HairStyle</a></li>
             <li><a href="#"> Styles</a></li>
             <li><a href="#"> Sale</a></li>
             <li><a href="CreateYourOwnUnit.php"> Create your own Unit</a></li>
             <li><a href="LogOut.php"> Log out</a></li>
          </ul>
        </nav>
   
</div>


    <div id="blockTitle">
      <h1>Style of the day </h1>
    </div>
 <!-- first section containing many other sections -->           
      <div id="all0">
            <div class="inner-all0">  <!-- for the scrollbar -->
             
              <a href="PreisAndPayement.php">
                <section id="left_section0">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>???</p>
                     <p>45€</p>
                   </div>
                </section>
              </a>


              <a href="PreisAndPayement.php">
                <section id="left_section00">
                     <div id="percentage_image">
                        <img src="Images/percentage.jpg" />
                     </div> 
                     <div id="description">
                        <p>??</p>
                        <p>85€</p>
                     </div>
                </section>
              </a>


               <a href="PreisAndPayement.php">
                <section id="left_section01">
                     <div id="percentage_image">
                         <img src="Images/percentage.jpg" />
                     </div> 
                     <div id="description">
                         <p>??</p>
                         <p>145€</p>
                     </div>
               </section>
              </a>

              
              <a href="PreisAndPayement.php">
               <section id="left_section02">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>??</p>
                     <p>405€</p>
                   </div>
               </section>
              </a>


              <a href="PreisAndPayement.php">
               <section id="left_section03">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>???</p>
                     <p>405€</p>
                   </div>
               </section>
              </a>


              <a href="PreisAndPayement.php">
               <section id="left_section04">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>???</p>
                     <p>405€</p>
                   </div>
               </section>
              </a>

              <a href="PreisAndPayement.php">
               <section id="left_section05">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>???</p>
                     <p>405€</p>
                   </div>
               </section>
              </a>

              <a href="PreisAndPayement.php">
               <section id="left_section06">
                   <div id="percentage_image">
                     <img src="Images/percentage.jpg" />
                   </div> 
                   <div id="description">
                     <p>???</p>
                     <p>405€</p>
                   </div>
               </section>
              </a>
      

      
      



            </div>
       </div>
          
<!-- More section -->
<h1>Neu bei HairStyle</h1>
     <div id="all1">  
          <div class="inner-all1">
            
            <section id="left_section10"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
               </div>
            </section>
     

            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>

            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>

            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>

            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>

            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>


            <section id="left_section11"> 
               <div id="description">
                 <p>???</p>
                 <p>505€</p>
              </div>
            </section>

     </div>
  </div>
<!-- footer -->

<?php include("Footer.php"); ?>

       </div>
    </body>
</html>