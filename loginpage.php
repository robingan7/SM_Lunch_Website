<?php
require 'lgs.inc.php';
 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>LunchFriendsLogin</title>
	  <link rel="stylesheet"  href="loginStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<div class="loginbox">
  <a href="https://www.smhs.org">
	<img src="avatar.gif" class="avatar" >
  </a>
		<h1>Login Here</h1>
    <?php
    if (!isset($_SESSION['id'])) {
		  echo'
      <form action="log.inc.php" method="post">
      <div class="inputWithIcon">
			 <p>Username</p>
			   <input type="text" name="username2" placeholder="Enter User">
      <i class="fa fa-user fa-lg fa-fw" aria-hidden="true">
      </i>
      </div>
      <div class="inputWithIcon">
			<p>Password</p>
			<input type="password" name="password2"  placeholder="Enter Password">
      <icon class="fa fa-key fa-lg fa-fw" aria-hidden="true">
      </icon>
      <div class="buttonstyle" action="log.inc.php" method="post">
			<button type="submit" name="signup-submit2">LOGIN</button>
      </div>
			<a href="#">Lost your password</a><br>
			<a href="signuppage.php">Don not have an account?</a>
      </div>
		  </form>';
    }
    else if (isset($_SESSION['id'])) {
        require 'mainpage.php';
        }

    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyfields") {
        echo '<p class="signuperror">Fill in all fields!</p>';
      }
      else if ($_GET["error"] == "sqlerror") {
        echo '<p class="signuperror">There is en error!</p>';
      }
      else if ($_GET["error"] == "wrongpwd") {
        echo '<p class="signuperror">Your passwords is wrong!</p>';
      }
    }
    // Here we create a success message if the new user was created.
       ?>
	</div>
</body>
</html>
