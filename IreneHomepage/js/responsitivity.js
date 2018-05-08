function allLinksInOneDiv() 
{
	const listLinks = ["index.html ","wohnen.html","konzeption.html","betreuungskosten.html",
                       "freiePlaetze.html","fotos.html","tagesablauf.html","tageskinder.html",
                       "kommentar.html","kontakt.html" ,"urlaub.html","info.html"];

    const listLinksName =["home ","wohnen ","konzeption ","betreuungskosten ","freiePlaetze ",
                          "fotos ","tagesablauf ","tageskinder ", "kommentar ","kontakt ", 
                           "urlaub ","info"];


	var menu = document.getElementById("menu");
	document.getElementById("menu").innerHTML = "";
	menu.id = "menuSmall";

	for (var i = 0; listLinks.length > i ; i++) 
	{
		var linkElement = document.createElement('a');
		linkElement.href = listLinks[i];
		linkElement.textContent = listLinksName[i];
		menu.appendChild(linkElement);
	
	}

}

console.log(window.innerWidth);
if (window.innerWidth < 600) {
	allLinksInOneDiv();
	alert("hh");
}

