var myIndex = 0;
carousel();

function carousel() {
    var i;
    var arrayOfSlides = document.getElementsByClassName("mySlides");
    for (i = 0; i < arrayOfSlides.length; i++) {
       arrayOfSlides[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > arrayOfSlides.length) {myIndex = 1}    
    arrayOfSlides[myIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000); 
  }