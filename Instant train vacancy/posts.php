<?php

$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$postdate123=$_POST["postdate1"];

$postname123=$_POST["postname1"];

$postpnr123=$_POST["postpnr1"];

$postsource123=$_POST["postsource1"];

$postdestination123=$_POST["postdestination1"];

$postnumber123=$_POST["postmnumber1"];

$postemail123=$_POST["postemail1"];


mysqli_query($con,"INSERT INTO `postdetails` (`postdate1`, `name1`, `pnr1`, `postsource1`, `postdestination1`, `postmobile1`, `postmail1`) VALUES ('$postdate123', '$postname123', '$postpnr123', '$postsource123', '$postdestination123', '$postnumber123', '$postemail123')");

echo "inserted successfully \n";

mysqli_close($con);

echo "\n connection closed success fully";


?>