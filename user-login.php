<?php $title = "User Login";
      $filename = "user-login.php";
      $date = "2017-09-08";
      $description = "null";
      $banner = "Please log in";
include "header.php";?>
<?php

$error = "";
$output = "";

  if($_SERVER["REQUEST_METHOD"] == "GET")
    {
      $login = "";
      $password = "";
    }
  else if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $login = trim($_POST["user_id"]);
      $password = trim(md5($_POST["password"]));

      if(strlen($login) ==  0)
        {
          $error .= "You must provide your user id.<br/>";
        }
      if(strlen($password) ==  0)
        {
          $error .= "You must provide your password.<br/>";
        }
      if(strlen($error) == 0)
        {
          $conn = db_connect();

          $results = pg_prepare($conn, "my_query", "SELECT user_id, password, last_access
        			FROM users
              WHERE user_id = $1 AND password = $2");

          $results = pg_execute($conn, "my_query", array($login, $password));

          if(pg_num_rows($results) != 0)
            {


              session_start();

              $_SESSION['last_access'] =  pg_fetch_result($results, 0, 2);

              $_SESSION['user_id'] = $login;

              header('Location: user-dashboard.php');

              $updateresults = pg_prepare($conn, "update_query", "UPDATE users SET last_access = now()
                      WHERE user_id = $1");

              $updateresults = pg_execute($conn, "update_query", array($login));

            }
          else
            {
              $error = "The user id/password were not found in our system.<br/>";

              $notfoundresults = pg_prepare($conn, "notfound_query", "SELECT user_id, password FROM users WHERE user_id = $1 AND password = $2");

              $notfoundresults = pg_execute($conn, "notfound_query", array($login, $password));

              if(!pg_num_rows($results))
                {
                  $login = "";
                }
            }
        }
    }
 ?>
<h3 style = "text-align: center;"><?php echo $error; ?></h3>
<h3 style = "text-align: center;"><?php echo $output; ?></h3>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" >
 <div style= "text-align: center;">
    <hr/>
    <p>
      Enter your user ID and password to connect to this system<br/>
    </p>
    <table border="0" cellpadding="10" style="margin: auto;">
    <tr>
    	<td><strong>User ID</strong></td>
    	<td><input type="text" name="user_id" value="<?php echo $login; ?>" size="20" /></td>
    </tr>
    <tr>
    	<td><strong>Password</strong></td>
    	<td><input type="password" name="password" value="" size="20" /></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" value = "Log In"/></td>
    </tr>
    </table>
    <p>
      Please wait after pressing <strong>Log in</strong>
      while we retrieve your records from our database.<br/>
      <em>(This may take a few moments)</em>
    </p>
  </div>
</form>
<?php include "footer.php";?>
