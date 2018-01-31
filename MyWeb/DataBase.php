<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=myweb;charset=utf8', 'root', '');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}


// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM login');

// On affiche chaque entrée une à une
while ($data = $reponse->fetch())
{
    
    if( $data['id'] == 1){
    	echo $data['email'];}
  
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>