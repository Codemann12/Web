var myIndex = 0;


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

function myFunction()
 {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function initMap() {
        map = new OpenLayers.Map("mapid");
        var mapnik         = new OpenLayers.Layer.OSM();
        var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
        var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
        var position       = new OpenLayers.LonLat(10.113020, 54.310822).transform( fromProjection, toProjection);
        var zoom           = 17; 
        

        map.addLayer(mapnik);
        var markers = new OpenLayers.Layer.Markers( "Markers" );       
        var size = new OpenLayers.Size(21,21);
        var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
        var icon = new OpenLayers.Icon("img/Irene.png", size, offset);
        markers.addMarker(new OpenLayers.Marker(position,icon));


        map.addLayer(markers);
        map.setCenter(position, zoom );
}

carousel();
initMap();