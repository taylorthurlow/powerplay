<?php

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "tsk";
  $pass = "asswipe#####";

  $databaseName = "powerplay";
  $tableName = "rooms";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysql_query("SELECT * FROM $tableName");          //query
  $array = mysql_fetch_row($result);                          //fetch result

  //--------------------------------------------------------------------------
  // 3) echo result as json
  //--------------------------------------------------------------------------
  echo json_encode($array);

?>
