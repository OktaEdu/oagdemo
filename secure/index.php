<html lang="en">

<head>
<title>Okta Access Gateway Demo</title>
<link rel="stylesheet" href="../wamdemo.css">
</head>
<body>


  


<div class="content">




 <h2> Okta Access Gateway Demo Application - Secure Page</h2>

 
This page uses the Okta Access Gateway to demonstrate header-based app integration and URL level authorization<p>
Any authenticated user can visit this page <br>

<p>


<br>

<p>
<?php
$attrs = ['UserName','FirstName','LastName','NickName','Role'];
foreach ($attrs as $attr) {
	$sattr = strtoupper($attr);
	if ($_SERVER[$sattr]) {
		echo "$attr is: $_SERVER[$sattr]";
	} else {
		echo "*** $attr is not found - Looking for header attribute - $attr ***";
	}
	echo "<p>";
}
?>
<a href="../admin/"> Go To Admin Page</a> <p>
<a href="../"> Return to Public Page</a> <p>
</div>
	
</body>
</html>
