<?php $title = "User Dashboard";
      $filename = "user_dashboard.php";
      $date = "2017-09-08";
      $description = "null";
      $banner = "User Dashboard";
include "header.php";?>



<?php
session_start();
if(isset($_SESSION['user_id']))
  {
  echo "Welcome: " . $_SESSION['user_id'];
  }
else
   {
     header('Location: user-login.php');
     }
?>


<?php include "footer.php";?>
