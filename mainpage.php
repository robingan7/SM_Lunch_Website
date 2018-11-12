<?php
require 'lgs.inc.php';

$sql = "SELECT id FROM username WHERE id=1;";

$result = mysqli_query($conn,$sql);
$resultRow=mysqli_num_rows($result);

if ($resultRow > 0) {
  $id=mysqli_fetch_assoc($result);
  echo '<form action="out.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
  //echo $id['id'];
}





?>
