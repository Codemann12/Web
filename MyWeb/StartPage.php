<?php 
 session_start();
 /*if(isset($_COOKIE['email'])) {

     echo "Cookie  email is set!<br>";
     echo "Value is: " . $_COOKIE['email'];
}*/


if (!isset($_POST['email']) && !isset($_POST['password']) || empty($_POST['email']) || empty($_POST['password'])){
       $_SESSION['error_log_in'] = "password or email wrong..."; 
       header("Location: LogInError.php");     
}

try{
 $bdd = new PDO('mysql:host=localhost;dbname=myweb;charset=utf8', 'root', '');
    }catch(Exception $e){
 die('Erreur : '.$e->getMessage());
    }
$response = $bdd->query('SELECT email, password, surname, name FROM register');

while ($data = $response->fetch()) {
   if ($data['email'] == $_POST['email'] AND $data['password'] == $_POST['password']) {
    	  $_SESSION['surname']  = $data['surname'];
        $_SESSION['name']     = $data['name'];
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        include 'WelcomeUser.php'; 
        $_SESSION['login'] = true;
    }

    if ($data['email'] == $_POST['email'] AND $data['password'] != $_POST['password']) {
    	       $_SESSION['error_log_in'] = "password or email wrong..."; 
       header("Location: LogInError.php");}
 }


$response->closeCursor();
?>
