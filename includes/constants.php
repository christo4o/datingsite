<!--
Authors: Christopher O'Marra, Erik Kostashuk, Harsh Yadav, Brenden Demetorff
Filename: constants.php
Date: 2017-09-28
Description: This file holds all the constants for
             validation, the database connection and user types
-->

<?php
define("db_url", "localhost");
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
