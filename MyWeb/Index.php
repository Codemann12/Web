<?php 
 session_start();

?>


<!DOCTYPE html>
<html>

 <!-- page head -->
    <head>
    	  <meta charset="utf-8">
    	     <link rel="stylesheet" type="text/css" href="IndexStyle.css">
    	        <div id="icon">
    	          <link rel="shortcut icon" href="Images/icon.ico" />
    	        </div>
	      <title>HairStyle</title>
    </head>


<!-- page body -->
<body>
  <div id="pageBody">

 <!--  header will be bind with the iclude function
       <?php include("Header.php"); ?>  -->

        <div id= "headerDecoration">
        	   <h1>Hair<span>S</span>tyle<d>.com</d></h1>
             <sa> <a href=" LogIn.php">  My HairStyle</a></sa>
                 <nav>
                     <ul>
        	             <li><a href="#"> Styles</a></li>
        		           <li><a href="#"> Sale</a></li>
        		           <li><a href="#"> Coming Soon</a></li>
        		           <li><a href="LogIn.php"> Log in</a></li>
        		           <li><a href="SignUp.php"> Sign up</a></li>
        	           </ul>
                 </nav>
        
       
            

<!-- search field --> 
             <div class="wrap">
                  <div class="search">
                      <input type="text" class="searchTerm" placeholder="What are you looking for?">
                      <button type="submit" class="searchButton"></button>
                  </div>
             </div>
      </div>

<div class="Slide">
   <img class="mySlides" src="Images/1.jpg" style="width:100%">
   <img class="mySlides" src="Images/2.jpg" style="width:100%">
   <img class="mySlides" src="Images/3.jpg" style="width:100%">
  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</div>

<script type="text/javascript">
  
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



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