<?php 
  define('HOST','localhost'); 
  define('USER','svqrzyrb_vic'); 
  define('PASS','VTf5jo3V'); 
  define('DB','svqrzyrb_nlbtest'); 
   
  $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

mysql_select_db("DB") or die("Could not open the db");
         $showtablequery="SHOW TABLES FROM DB";
         $query_result=mysql_query($showtablequery);
         while($showtablerow = mysql_fetch_array($query_result))
         {
         echo $showtablerow[0]." ";
         } 
?>
