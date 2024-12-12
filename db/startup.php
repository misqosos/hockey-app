<?php

if (!isset($_COOKIE["startupSqLExecuted"])) {
    $dbh = new PDO("mysql:host=localhost", 'root', '');
    $startupSQL = file_get_contents("db/sql.sql");
    $sqlAffection = $dbh->exec($startupSQL);
  
    if ($sqlAffection >= 0) {
      setcookie("startupSqlExecuted", true, time() + (86400 * 30), "/");
    } else { echo "DB and tables not created"; }
  }

?>