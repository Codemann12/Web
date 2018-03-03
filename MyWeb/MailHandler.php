<?php 
session_start();
if(isset($_POST['submit'])){
    $to = "fbcedric@yahoo.fr"; 
    $from = $_SESSION['email']; 
    $first_name =  $_SESSION['surname'];
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
    $message = htmlspecialchars($first_name . " " . $last_name . " New wig with the following  features:\n" . "closure: ".$closure."\n".
        "hair type: ".$hairType."\n".
        "Hair length: ".$hairLength."\n".
        "Hair color: ".$hairColor."\n".
        "Hair density: ".$hairDensity."\n".
        "Style: ".$styling."\n".
        "Processing time ".$processingTime."\n".
        "Rendez-vous: ".$privateWigFitting."\n".
        "More informations from ". $_SESSION['name'].":\n".$addInfo."\n".
        "Quantity: ".$quantity."\n");
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