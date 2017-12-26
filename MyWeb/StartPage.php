<?php 
 session_start();

      if (!isset($_POST['email']) && !isset($_POST['password']) || empty($_POST['email']) ||empty($_POST['password'])){
      	 header("Location: LogInError.php");
         // sql loading...
      	}

        $_SESSION['surname']    = "user00"; // just for test purpose
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['error_log_in'] = "password or email wrong..."; // would be handel properly with Mysql


   include 'WelcomeUser.php'; 

?>
