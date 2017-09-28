<?php $title = "User Dashboard";
      $filename = "user_dashboard.php";
      $date = "2017-09-08";
      $description = "This page calls a function to display the last time
                      the user logged in.";
      $banner = "User Dashboard";
include "header.php";?>
<hr/>
<p>
  <?php lastAccess(); ?>
</p>
<?php include "footer.php";?>
