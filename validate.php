<?php
  // Implement session variables and for every failed login attempt, keep track of it in a session variable

  // If the username and password are correct then take them to index.php and display their username (welcome, NAME) with the current date (formatted in a readable way)

  // If they log in successfully, set a session variable 'authenticated' to true (or 1)

  $valid_username = "shuming";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password ) {
    echo "success";
  } else {
    echo "failed";
  }
?>