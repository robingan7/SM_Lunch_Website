<?php
  //require "signup.php"
?>
<main>
<head>
    <title>Sign Up</title>
	  <link rel="stylesheet"  href="signupStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="loginbox">
    <a href="https://www.smhs.org">
  	<img src="avatar.gif" class="avatar" >
    </a>
		<h1>WELCOME!!!</h1>
    <h1>Sign Up Here</h1>
    <?php
          // Here we create an error message if the user made an error trying to sign up.
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }

            else if ($_GET["error"] == "notcheck") {
              echo '<p class="signuperror">You have to agree!</p>';
            }
          }
          // Here we create a success message if the new user was created.
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>

		  <form action = "signup2.inc.php" method = "post">

      <div class="inputWithIcon" >
			     <p>Username</p>
			        <input type="text" name="username" placeholder="Enter User">
              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true">
              </i>
      </div>
      <div class="inputWithIcon" >
			     <p>Email</p>
			        <input type="text" name="email" placeholder="Enter Your Email">
              <icon2 class="fa fa-envelope fa-lg fa-fw" aria-hidden="true">
              </icon2>
      </div>
      <div class="inputWithIcon" >
			<p>Password</p>
			<input type="password" name="password"  placeholder="Set Password">
      <icon class="fa fa-key fa-lg fa-fw" aria-hidden="true">
      </icon>
    </div>
      <div class="inputWithIcon" >
      <p>Comfirm Password</p>
			<input type="password" name="comfirmpassword" placeholder="Confirm Password">
      <icon class="fa fa-key fa-lg fa-fw" aria-hidden="true">
      </icon>
      </div>

      <div class="checkStyle">
      <input type="checkbox" id="terms" name="checkbox" value="">
      <label for="terms">I agree to</label>
      <a herf="">terms and condition</a>
      </div>

      <div class="buttonstyle2">
      <a href="loginpage.php">
      <button type="submit" name="1">Back To Login</button>
      </a>
      </div>

      <div class="buttonstyle">
      <button type="submit" name="signup-submit">SUMBIT</button>
      </div>
		  </form>
	</div>
</body>
</main>
