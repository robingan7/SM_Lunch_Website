<html>
<main>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-wirdth, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link rel="stylesheet"  href="registStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
	<div class="loginbox">
    <a href="https://www.smhs.org/other/parents/bell-schedule">
  	<img src="avatar.jpg" class="avatar" >
    </a>

    <h1>Update your information</h1>
    <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "wrongid") {
              echo '<p class="signuperror">Wrong password!</p>';
            }
            else if ($_GET["error"] == "wrongpassword") {
              echo '<p class="signuperror">Wrong Password!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "sqlerror1") {
              echo '<p class="signuperror">Please Check All the Fields!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Update successful!</p>';
            }
          }
          ?>


		  <form action = "register.inc.php" method = "post">

        <div class="inputWithIcon" >
			     <p><span>ID</span>--On the <span>Up Left-hand</span> corner HOME page</p>
			        <input type="text" name="userid" placeholder="Enter Your ID">
              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true">
              </i>

      <div class="inputWithIcon" >
			     <p>your BUILDING of period1</p>
			        <select name="period1">
                <option>-----Period1--------</option>
                <option value="B">B</option>
                <option value="G118">Talon</option>
                <option value="C">C</option>
                <option value="S">S</option>
                <option value="G115">G115</option>
                <option value="G116">G116</option>
                <option value="G117">G117</option>
                <option value="A">A</option>
                <option value="T">T</option>
                <option value="R">R</option>
                <option value="G">G</option>
                <option value="GYM">GYM</option>
                <option value="G1">Library</option>
              </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>
      <div class="inputWithIcon" >
			     <p>your BUILDING of period2</p>
           <select name="period2">
             <option>-----Period2--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>
      <div class="inputWithIcon" >
			     <p>your BUILDING of period3</p>
           <select name="period3">
             <option>-----Period3--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>
      <div class="inputWithIcon" >
			     <p>your BUILDING of period4</p>
           <select name="period4">
             <option>-----Period4--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>

      <div class="inputWithIcon" >
			     <p>your BUILDING of period5</p>
           <select name="period5">
             <option>-----Period5--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>

      <div class="inputWithIcon" >
			     <p>your BUILDING of period6</p>
           <select name="period6">
             <option>-----Period6--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>

      <div class="inputWithIcon" >
			     <p>your BUILDING of period7</p>
           <select name="period7">
             <option>-----Period7--------</option>
             <option value="B">B</option>
             <option value="G118">Talon</option>
             <option value="C">C</option>
             <option value="S">S</option>
             <option value="G115">G115</option>
             <option value="G116">G116</option>
             <option value="G117">G117</option>
             <option value="A">A</option>
             <option value="T">T</option>
             <option value="R">R</option>
             <option value="G">G</option>
             <option value="GYM">GYM</option>
             <option value="G1">Library</option>
           </select>
              <i2 class="fa fa-building fa-lg fa-fw" aria-hidden="true">
              </i2>
      </div>


      <div class="inputWithIcon" >
        <p>Password</p>
          <input type="password" name="password2" placeholder="Enter Your Password">
          <icon class="fa fa-key fa-lg fa-fw" aria-hidden="true">
          </icon>
      </div>

      <div class="buttonstyle">
      <button type="submit" name="signup-submit">SAVE</button>
      </div>

      <div class="buttonstyle2">
      <a href="loginpage.php">
      <button type="submit" name="1">Back To Login</button>
      </a>
      </div>
		  </form>
	</div>
</div>
</body>
</main>
</html>
