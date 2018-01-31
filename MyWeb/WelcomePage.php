<?php 
 session_start();

 
    if (isset($_POST['password']) && (($_POST['password'] != $_POST['passwordVerify']))){
     	 $_SESSION['error_account'] = 'The password are not similar...';
    	 header("Location: SignUpError.php");
    	}


    if (empty($_POST['password']) && eval($_POST['password']) < 5 ){ 
     	$_SESSION['error_account'] = "password to short...";
     	header("Location: SignUpError.php");     
       }


    if (!isset($_POST['email']) || empty($_POST['email'])) {
     	$_SESSION['error_account'] = 'please type in your email...';
    	header("Location: SignUpError.php");
    	}


    if (!isset($_POST['surname']) || empty($_POST['surname'])) {
     	$_SESSION['error_account'] = 'please type in your surname...';
    	header("Location: SignUpError.php");
    	}

    if (!isset($_POST['name']) || empty($_POST['name'])) {
       $_SESSION['error_account'] = 'please type in your name...';
       header("Location: SignUpError.php");
    	}

    setcookie('email', $_POST['email'], time() + 730*24*3600, null, null, false, true); 
    setcookie('password', $_POST['password'], time() + 730*24*3600, null, null, false, true);

    try{
    $bdd = new PDO('mysql:host=localhost;dbname=myweb;charset=utf8', 'root', '');
       }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
       }

    $req = $bdd->prepare('INSERT INTO register(surname, name, email, password) VALUES(:surname, :name, :email, :password)');
    $req->execute(array(
    'surname' => $_POST['surname'],
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
     ));


     $_SESSION['email']    = $_POST['email'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['surname']  = $_POST['surname'];
     $_SESSION['name']     = $_POST['name'];
     $_SESSION['login']    = true;
     include 'WelcomeUser.php';
?>