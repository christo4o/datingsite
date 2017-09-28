<?php
  function db_connect(){
    $connection = pg_connect("host="."localhost"." dbname=group25_db user=group25_admin password=buyinggf");
    return $connection;
  }
?>
