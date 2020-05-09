<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Instanttrainvacancy</title>
	

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/menu.css">
<script>

</script>
<body>
<div class="wrap-body">
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'>
				<span> Return to Home</span></a></li>
			</ul>
		</div>
		<header class="top">
		<div class="top">
			<div class="logo">
				<center><a><img src="images/logo.png" /></a><center>
			</div>
</div>
		</header>

<?php


//$finddate123 = $_POST["finddate1"];

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($findsource123 = 'BBU')
{
}


//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
   //  die("Connection failed: " . $conn->connect_error);
//}

//$finddate123=$_POST["finddate"];

//$findsource123=$_POST["findsource"];

//$finddestination123=$_POST["finddestination"];

//$findmnumber123=$_POST["findmnumber"]; 

// $conn->close();

$finddate123 = $_POST["finddate1"];
$findsource123 = $_POST["findsource1"];
$finddestination123 = $_POST["finddestination1"];

$sql = "SELECT postdate1, name1, pnr1, postsource1, postdestination1, postmobile1, postmail1 FROM postdetails WHERE postdate1 = '$finddate123' AND postsource1 = '$findsource123' AND postdestination1 = '$finddestination123' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


echo "<pre> 



</pre>";

echo "<div class=txt>";

echo "<center>";

echo " <table>";

echo "<tr>";

echo "<th>DATE </th>";

echo "<th>name </th> </center> ";

echo "<th>pnr </th>";

echo "<th>source </th>";

echo "<th>Destination </th> ";

echo "<th>mobile number </th>";

echo "<th>mail </th></tr>";


    while($row = $result->fetch_assoc())
 {
 

$datefetch=$row["postdate1"];

$namefetch=$row["name1"];

$pnrfetch=$row["pnr1"];

$sourcefetch=$row["postsource1"];

$destinationfetch=$row["postdestination1"];

$mobilefetch=$row["postmobile1"];

$mailfetch=$row["postmail1"];

echo "<tr>";

echo "<td>$datefetch</td>";	

echo "<td>$namefetch</td>";

echo "<td>$pnrfetch</td> ";

echo "<td>$sourcefetch</td>";

echo "<td>$destinationfetch</td>";

echo "<td>$mobilefetch</td>";

echo "<td>$mailfetch</td>";

echo "</tr>	";


    }
} else {


	echo "<center> <b>";
    echo "NO VACANCY";

    echo "</b></center>";
}

echo "	 </table>";

echo "</center>";

echo " </div>";
echo "<pre> 



</pre>";

$conn->close();

function getting()
{

$GLOBALS [$finddate123 = $_GET["finddate1"]];
$GLOBALS [$findsource123 = $_GET["findsource1"]];
$GLOBALS [$finddestination123 = $_GET["finddestination1"]];

}

?>


<div class="footer1">
<footer>
			
<div class="zerogrid wrap-footer">
				
<div class="row">
					
<div class="col-1-3 col-footer-3">

 <div class="wrap-col">

      <h3>Location</h3>

      <div class="wrap-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.6549008389893!2d80.22226946649887!3d12.800898229955218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5250846e6bb04b%3A0xd03cc8ff6c6d7c46!2sHindustan+University%2C+Old+Mahabalipuram+Rd%2C+Padur%2C+Tamil+Nadu+603103!5e0!3m2!1sen!2sin!4v1472580841569" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>

 </div>

</div>
<div class="col-1-3 col-footer-1">
						
<div class="wrap-col">
							
<h3>About</h3>
							
<a href="index.html">
<img src="#"/></a>
							
<p>Please contact us </p>
</div>
</div>
<div class="col-1-3 col-footer-2">

<div class="wrap-col">

<h3>Contact us:</h3>
	
<ul>

<li><a>For more support:</a></li><br>								
<li><a>Mail: premmenni96669@gmail.com</a></li><br>							
<li><a>+918681896160</a></li><br>
	</ul>
	</div>
	
</div>

</div>

</div>

<div class="zerogrid copyright">
<div class="wrapper">
Copyright @ -Instant Train Ticket Vacancy

<ul class="quick-link f-right">

<li><a href="#">Privacy Policy</a></li>

<li><a href="#">Terms of Use</a></li>
</ul>

</div>

</div>

</footer>
</div>

</body>
</html>