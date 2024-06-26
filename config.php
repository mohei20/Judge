
<?php
  $DB_SERVER= "db";
  $DB_USERNAME= "admin";
  $DB_PASSWORD= "admin";
  $DB_DATABASE="palstine_show";
   $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
   if(!$db ){
	   die("Connection Failed".mysqli_connect_error());
   }
?>

