<?php 
 session_start();

if (!isset($_POST['email']) && !isset($_POST['password']) || empty($_POST['email']) || empty($_POST['password'])){
       $_SESSION['error_log_in'] = "password or email wrong..."; 
       header("Location: LogInError.php");     
}

try{
 $bdd = new PDO('mysql:host=localhost; dbname=lt_wig; charset=utf8', 'root', '');
    }catch(Exception $e){
 die('Error : '.$e->getMessage());
    }

$email = $_POST['email'];
$response = $bdd->query("SELECT email, password, surname, name FROM client WHERE  email = '$email'");
$result = $response->fetch(); 

if ($result && password_verify($_POST['password'], $result['password'])) {
  $_SESSION['surname']  = $result['surname'];
  $_SESSION['name']     = $result['name'];
  $_SESSION['email']    = $_POST['email'];   
  $_SESSION['login'] = true;
  include 'WelcomeUser.php';
}else{
  $_SESSION['error_log_in'] = "password or email wrong.HFU.."; 
  header("Location: LogInError.php"); 
}
$response->closeCursor();
?>
