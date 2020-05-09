
<?php

$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$finddate123=$_POST["finddate"];

$findsource123=$_POST["findsource"];

$finddestination123=$_POST["finddestination"];

$findmnumber123=$_POST["findmnumber"]; 


mysqli_query($con,"SELECT * FROM `postdetails` where `$finddate123` = `postdate123` AND `$findsource123` LIKE `$postsource123` AND `$finddestination123` LIKE `$postdestination123`");

echo "fetched successfully \n";

mysqli_close($con);

echo "\n connection closed success fully";


  ?>
  