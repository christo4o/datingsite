<!--
Authors: Christopher O'Marra, Erik Kostashuk, Harsh Yadav, Brenden Demetorff
Filename: db.php
Date: 2017-09-28
Description: This file contains the connection string for the database.
-->

<?php
  function db_connect(){
    $connection = pg_connect("host="."localhost"." dbname=group25_db user=group25_admin password=buyinggf");
    return $connection;
  }
?>
