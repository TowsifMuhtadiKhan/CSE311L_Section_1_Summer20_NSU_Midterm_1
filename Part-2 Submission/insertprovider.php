<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Provider VALUES 
(1,'Acme Widget Suppliers','1 Grub St., Potemkin Village, IL 61801'),
(2,'Big Red Tool and Die','4 My Way, Bermuda Shorts, OR 90305'),
(3,'Perfunctory Parts','99999 Short Pier, Terra Del Fuego, TX 41299'),
(4,'Alien Aircaft Inc.','2 Groom Lake, Rachel, NV 51902');
";
if (mysqli_query($link,$sql))
{
 echo "VALUES INSERTED";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>