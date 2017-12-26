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



     $_SESSION['email']    = $_POST['email'];
     $_SESSION['password'] = $_POST['password'];
     $_SESSION['surname']  = $_POST['surname'];
     $_SESSION['name']     = $_POST['name'];
     
     include 'WelcomeUser.php';
?>