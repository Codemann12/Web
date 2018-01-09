<?php 
session_start();

if(isset($_POST['submit'])){
    $to = "fbcedric@yahoo.fr"; // this is your Email address
    $from = $_SESSION['email']; // this is the sender's Email address
    $first_name = $_SESSION['surname'];
    $last_name =$_SESSION['name'];
    $closure = $_POST['closure'];
    $hairType = $_POST['HairType'];
    $hairLength = $_POST['hairLength'];
    $hairColor = $_POST['hairColor'];
    $hairDensity = $_POST['hairDensity'];
    $styling = $_POST['styling'];
    $processingTime = $_POST['processingTime'];
    $privateWigFitting = $_POST['privateWigFitting'];
    $addInfo = $_POST['addInfo'];
    $quantity = $_POST['quantity'];
    $subject = "Nouvelle commande";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " a besoin d'une perruque avec les caracteristiques suivantes:\n" . "closure: ".$closure."\n".
        "Type de meche: ".$hairType."\n".
        "Longueur de meche: ".$hairLength."\n".
        "Couleur de meche: ".$hairColor."\n".
        "Densite de meche: ".$hairDensity."\n".
        "Style: ".$styling."\n".
        "Temps necessaire pour la creation: ".$processingTime."\n".
        "Rendez-vous: ".$privateWigFitting."\n".
        "Plus d'informations de la part ". $_SESSION['name'].":\n".$addInfo."\n".
        "Quantite: ".$quantity."\n";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . "blabla";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: Index.php');
    }else{
        echo "fail..";
    }
?>