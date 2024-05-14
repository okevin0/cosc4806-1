<?php 
 session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Shuming Lin</title>
  </head>
  <body>
    <h1>COSC4806 - Assignment1</h1>
  
    <p>Welcome, <?php echo $_SESSION['username'] . " and today is " . date("Y-m-d H:i:s"); ?></p>
  </body>
</html>