<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Course(
   snum decimal(9,0) PRIMARY KEY NOT NULL,
   cname VARCHAR(40))";
if (mysqli_query($link,$sql))
{
 echo "Table Created";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>