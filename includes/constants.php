
<?php
function db_connect(){
  $connection = pg_connect("host=127.0.0.1 dbname=omarrac_db user=omarrac password=somerguy");
  return $connection;
}
?>

<?php
define("ADMIN", "a");
define("CLIENT", "c");
define("INCOMPLETE", "i");
define("DISABLED", "d");
define("MINIMUM_ID_LENGTH", 5);
define("MAXIMUM_ID_LENGTH", 20);
define("MINIMUM_PASSWORD_LENGTH", 6);
define("MAXIMUM_PASSWORD_LENGTH", 32);
define("MAX_FIRST_NAME_LENGTH", 128);
define("MAX_LAST_NAME_LENGTH", 128);
define("MAXIMUM_EMAIL_LENGTH", 255);
 ?>
