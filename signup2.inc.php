<?php
if (isset($_POST['1'])) {
  header("Location: ../lunchweb/loginpage.php");
  exit();
}
if (isset($_POST['signup-submit'])) {

  
  require 'lgs.inc.php';

  
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['comfirmpassword'];

  
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../lunchweb/signuppage.php?error=emptyfields&uid=".$username."&mail=".$email." password=".$password." con: ".$passwordRepeat);
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../lunchweb/signuppage.php?error=invaliduidmail");
    exit();
  }

  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../lunchweb/signuppage.php?error=invaliduid&mail=".$email);
    exit();
  }
  
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../lunchweb/signuppage.php?error=invalidmail&uid=".$username);
    exit();
  }

  else if (!isset($POST['checkbox'])) {
    header("Location: ../lunchweb/signuppage.php?error=notcheck");
    exit();
  }
  
  else if ($password !== $passwordRepeat) {
    header("Location: ../lunchweb/signuppage.php?error=passwordcheck&uid=".$username."&mail=".$email."password=".$password." ".$passwordRepeat);
    exit();
  }
  else {

    
    $sql = "SELECT name FROM username WHERE name=?;";
    
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      
      header("Location: ../lunchweb/signuppage.php?error=sqlerror");
      exit();
    }
    else {
     
      mysqli_stmt_bind_param($stmt, "s", $username);
     
      mysqli_stmt_execute($stmt);
     
      mysqli_stmt_store_result($stmt);
     
      $resultCount = mysqli_stmt_num_rows($stmt);
     
      mysqli_stmt_close($stmt);
     
      if ($resultCount > 0) {
        header("Location: ../lunchweb/signuppage.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
       
        $sql = "INSERT INTO username (name, email, password2) VALUES (?, ?, ?);";
        
        $stmt = mysqli_stmt_init($conn);
       
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        
          header("Location: ../lunchweb/signuppage.php?error=sqlerror1");
          exit();
        }
        else {

         
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
          
          mysqli_stmt_execute($stmt);
        
          header("Location: ../lunchweb/signuppage.php?signup=success");
          exit();

        }
      }
    }
  }
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
 
  header("Location: ../lunchweb/signuppage.php");
  exit();
}
