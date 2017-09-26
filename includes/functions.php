<?php
function displayCopyrightInfo()
{
  echo "&copy; " . date('Y') . " Group 25";
}
 ?>

 <?php
function lastAccess()
{
 session_start();
 if(isset($_SESSION['user_id']))
   {
     echo "Welcome back " . $_SESSION['user_id'] . " you last logged in on: " . $_SESSION['last_access'] . "";
   }
 else
  {
    header('Location: user-login.php');
  }
}
 ?>
