<?php
if (isset($_POST['1'])) {
  header("Location: ../lunchweb/loginpage.php");
  exit();
}
if (isset($_POST['signup-submit'])) {

  
  require 'periods.inc.php';
  require 'lgs.inc.php';

  
  $p1 = $_POST['period1'];
  $p2 = $_POST['period2'];
  $p3 = $_POST['period3'];
  $p4 = $_POST['period4'];
  $p5 = $_POST['period5'];
  $p6 = $_POST['period6'];
  $p7 = $_POST['period7'];
  $id = $_POST['userid'];
  $pass = $_POST['password2'];
 

  
  if (empty($p1) || empty($p2) || empty($p3) || empty($p4)|| empty($p5)|| empty($p6)|| empty($p7)) {
    header("Location: ../lunchweb/registpage.php?error=emptyfields&uid=".$p5);
    exit();
  }

  else {

    $sql = "SELECT * FROM periods WHERE id=?;";
    
    $stmt = mysqli_stmt_init($conn);
  
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    
      header("Location: ../lunchweb/registpage.php?error=sqlerror");
      exit();
    }

      else {
        mysqli_stmt_bind_param($stmt, "s", $id);
      
        mysqli_stmt_execute($stmt);
      
        mysqli_stmt_store_result($stmt);
        
        $resultCount = mysqli_stmt_num_rows($stmt);
        

        if($resultCount==0){
          $sql="SELECT * FROM username WHERE id=$id;";
          $result= mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($result);
          $truepass= $row['password2'];
          if($pass==$truepass){

          
          $sql = "INSERT INTO periods (one, two, three,four, five, six, seven, id) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        
      }
      else{
        header("Location: ../lunchweb/registpage.php?error=wrongpassword".$truepass.$pass);
        echo "hello";
        exit();
      }

      }

        else{
          $sql2="SELECT password2 FROM username WHERE id=$id;";
          $result2= mysqli_query($conn,$sql2);
          $row=mysqli_fetch_assoc($result2);
          $truepass= $row['password2'];

          if($pass==$truepass){
          $sql="UPDATE periods SET one='$p1', two='$p2', three='$p3' , four='$p4', five='$p5', six='$p6',seven='$p7' WHERE id=$id ";
          }
          else{
          header("Location: ../lunchweb/registpage.php?error=wrongid".$truepass);
          exit();
          }
        }
       
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          
          header("Location: ../lunchweb/registpage.php?error=sqlerror1");
          exit();
        }
        else {

         
          mysqli_stmt_bind_param($stmt, "ssssssss", $p1, $p2, $p3,$p4,$p5,$p6,$p7,$id);
          
          mysqli_stmt_execute($stmt);
         
          header("Location: ../lunchweb/registpage.php?signup=success");
          echo "hello";
          exit();

        }
      }
    }

  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  
  header("Location: ../lunchweb/registpage.php");
  exit();
}
