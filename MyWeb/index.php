<?php 
 session_start();

?>


<!DOCTYPE html>
<html>

 <!-- page head -->
    <head>
    	  <meta charset="utf-8">
    	     <link rel="stylesheet" type="text/css" href="indexStyle.css?ver =<?php
           filemtime('indexStyle.css');?>">
    	        <div id="icon">
    	          <link rel="shortcut icon" href="Images/icon.ico" />
    	        </div>
	      <title>Einkauf</title>
    </head>


<!-- page body -->
<body>
  <div id="pageBody">

 <!--  header will be bind with the iclude function -->
       <?php include("header.php"); ?>

        <div id="banner">
        	   <h1>HairStyle.</h1>
                 <nav>
                     <ul>
        	             <li><a href="#"> Styles</a></li>
        		           <li><a href="#"> Sale</a></li>
        		           <li><a href="#"> Coming Soon</a></li>
        		           <li><a href="log_in"> Log in</a></li>
        		           <li><a href="Sign_up.php"> Sign up</a></li>
        	           </ul>
                 </nav>
        
             <h2>your hair? your style.</h2>
             <h3>find the coolest and the best hair style online</h3>

<!-- search field -->
             <div class="wrap">
                  <div class="search">
                      <input type="text" class="searchTerm" placeholder="What are you looking for?">
                      <button type="submit" class="searchButton"></button>
                  </div>
             </div>
      </div>

      <h1>Sneaker des tages </h1>

 <!-- first section containing many other sections -->           
      <div id="all0">
            <div class="inner-all0">  <!-- for the scrollbar -->
             
              <a href="preis_and_payement.php">
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


              <a href="preis_and_payement.php">
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


               <a href="preis_and_payement.php">
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

              
              <a href="preis_and_payement.php">
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


              <a href="preis_and_payement.php">
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


              <a href="preis_and_payement.php">
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

              <a href="preis_and_payement.php">
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

              <a href="preis_and_payement.php">
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
<h1>Neu bei everysize</h1>
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