

  <?php
  // First we start a session which allow for us to store information as SESSION variables.
  //session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "loginpage.php";
?>


    <main>
      <div>
        <section>
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p>You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p>You are logged in!</p>';
          }
          ?>
        </section>
      </div>
    </main>
