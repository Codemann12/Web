<?php 
 session_start();
 $error = false;
 try{
  $bdd = new PDO('mysql:host=localhost; dbname=lt_wig; charset=utf8', 'root', '');
    }catch(Exception $e){
      die('Error : '.$e->getMessage());
    }

 // If the passwords are not similar reload the formular
if (isset($_POST['password']) && (($_POST['password'] != $_POST['passwordVerify']))){
   $_SESSION['error_account'] = 'The password are not similar...';
   $error = true;
   header("Location: SignUpError.php");
  	}


if (empty($_POST['password']) || (strlen($_POST['password']) < 5)){ 
   $_SESSION['error_account'] = "password to short...";
   $error = true;
   header("Location: SignUpError.php");     
   }


if (!isset($_POST['email']) || empty($_POST['email'])) {
   $_SESSION['error_account'] = 'please type in your email...';
   $error = true;
   header("Location: SignUpError.php");
   }

//Remove all illegal characters from emaila
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $_SESSION['error_account'] ="$email is not a valid email address";
    header("Location: SignUpError.php");
    }

if (!isset($_POST['surname']) || empty($_POST['surname'])) {
    $_SESSION['error_account'] = 'please type in your surname...';
    $error = true;
    header("Location: SignUpError.php");
    }

if (!isset($_POST['name']) || empty($_POST['name'])) {
   $_SESSION['error_account'] = 'please type in your name...';
   $error = true;
   header("Location: SignUpError.php");
   }

if (!$error) {
  $req = $bdd->query("SELECT email from client where email = '$email'");
  $result = $req->fetch();
  if ($result) {
    $_SESSION['error_account'] = 'The email already exist...';
    $error = true;
    header("Location: SignUpError.php");
  }
}


$password = $_POST['password'];
if (!$error) {
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $req = $bdd->prepare("INSERT INTO client (name, surname, email, password)
             VALUES (:name, :surname, :email, :password)");
    $result = $req->execute(array(
      'name' => $_POST['name'],
      'surname' => $_POST['surname'],
      'email' => $email,
      'password' => $password_hash
     ));

   if ($result) {
     $_SESSION['email']    = $email;
     $_SESSION['password'] = $password_hash;
     $_SESSION['surname']  = $_POST['surname'];
     $_SESSION['name']     = $_POST['name'];
     $_SESSION['login']    = true;
     include 'WelcomeUser.php';
  }else{
     $_SESSION['error_account'] = "A problem occur while saving your account please try again.";
     header("Location: SignUpError.php");
 }    
}
?>