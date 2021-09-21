<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "iwp";
 $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);
 
 return $con;
 }
 
function CloseCon($con)
 {
 $con -> close();
 }
   
?>