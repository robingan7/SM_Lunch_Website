 <?php

if (isset($_POST['signup-submit2'])) {

  
  require 'lgs.inc.php';
  require 'periods.inc.php';

  
  $mailuid = $_POST['username2'];
  $password = $_POST['password2'];

  

  
  if (empty($mailuid) || empty($password)) {
    header("Location: ../lunchweb/index.php?error=emptyfields&mailuid=".$mailuid);
    exit();
  }
  else {

    
    $sql = "SELECT * FROM username WHERE name=? OR email=?;";
    
    $stmt = mysqli_stmt_init($conn);
   
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      
      header("Location: ../lunchweb/index.php?error=sqlerror");
      exit();
    }
    else {

      
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      
      mysqli_stmt_execute($stmt);
     
      $result = mysqli_stmt_get_result($stmt);
      
      if ($row = mysqli_fetch_assoc($result)) {
        
        $pwdCheck = password_verify($password, $row['password2']);
      
        if ($password == $row['password2']) {
          

          session_start();
          
          $_SESSION['id'] = $row['id'];
          $checkid = $row['id'];
          $_SESSION['username2'] = $row['name'];
          $_SESSION['email'] = $row['email'];

          echo '<a href="loginpage.php" action="out.inc.php" class="buttonstyle3">
            <input type="submit" name="logout" value="Log Out">
            </a>';
          echo 'Your user id is '.$row['id'];

          echo'
          <html>
          <head>
              <title>Home</title>
          	  <link rel="stylesheet" href="mainStyle.css">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
              <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
          </head>
          <body>
          	<div class="loginbox">

          	<img src="avatar.gif" class="avatar">
          		<h1>WELCOME!!!</h1>
              <h1>This is SM offical lunch website</h1>



              <a href="aboutus.php" class="buttonstyle">
                <button>About us</button>
              </a>
              <a href="contactus.php" class="buttonstyle2">
                <input type="submit" name="button" value="Contact us">
              </a>

              </body>
              </html>
              '
          ;


          function checklunch($room){
            if($room=='B'||$room=='b'||$room=='C'||$room=='c'||$room=='S'||$room=='s'){
              return 'First Lunch';
          }
            else if($room=='A'||$room=='a'||$room=='T'||$room=='t'||$room=='R'||$room=='r'||$room=='G'||$room=='g'){
              return 'Second Lunch';
            }
            else{
              return 'Building does not exist';
            }
          }

          $sql4="SELECT one,two,three,four,five,six,seven FROM periods WHERE id=$checkid";
          $result3 = mysqli_query($conn,$sql4);
          $periods = array();
          $building = array();
          if (mysqli_num_rows($result3)>0){
            while($row2 = mysqli_fetch_assoc($result3)){
              $periods[] = $row2;
            }
          }

          $lunches = array('one','two','three','four','five');
          $one_or_tow = array();
          for($y = 0; $y <=4 ; $y++){
            $num = $lunches[$y];
            $one_or_tow[]= checklunch($periods[0][$num]);
          }


          echo 'Hello '.$row['name'].' from ';

          echo ' your friend Robin Gan';
          echo '<p>---------</p>';

          echo '<p class="lunch">Monday</p>'.$one_or_tow[0];
          echo '<p>---------</p>';
          echo '<p class="lunch">Tuesday</p>'.$one_or_tow[1];
          echo '<p>---------</p>';
          echo '<p class="lunch">Wednesday</p>'.$one_or_tow[2];
          echo '<p>---------</p>';

          echo '<p class="lunch">Thursday</p>'.$one_or_tow[3];
          echo '<p >---------</p>';
          echo '<a href="registpage.php">

            <input type="submit" name="startb" value="Update Your Information">
          </a>

          ';
          echo '<p class="lunch">Friday</p>'.$one_or_tow[4];




          exit();
        }
        
        else if ($password !== $row['password2']) {

          
          header("Location: ../lunchweb/index.php?error=wrongpwd=".$mailuid. "password=".$password.$row['password2'].$pwdCheck);
          exit();

        }
      }
      else {
        header("Location: ../lunchweb/index.php?login=wronguidpwd=".$mailuid. " password= ".$password);
        exit();
      }
    }
  }
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
 
  header("Location: ../lunchweb/index.php");
  exit();
}
