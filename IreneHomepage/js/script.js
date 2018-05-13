var myIndex = 0;
carousel();

function carousel()
{
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



function initMap()
{
    var uluru = {lat: 54.338393, lng: 10.128051};
    var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });

    var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}


function myFunction()
 {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


console.log(window.innerWidth);