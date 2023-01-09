<html lang="en">

<head>
<title>Okta Access Gateway Demo</title>
<link rel="stylesheet" href="../wamdemo.css">
</head>
<body>


  


<div class="content">




 <h2> Okta Access Gateway Demo Application - Anonymous Page</h2>

 
This page uses the Okta Access Gateway to demonstrate Anonymous Headers<p>
Any user can visit this page, but if the user is already authenticated the page will know who they are <br>


<br>

<p>
<?php
if ($_SERVER['HTTP_USERNAME']) {
	$user = $_SERVER['HTTP_USERNAME'];
	echo "Welcome: $user <p>";
} else {
	echo "You are not logged in. <p>";
}
?>
<a href="env.php"> Show HTTP request headers</a> <p>
<a href="../"> Return to Public Page</a> <p>


</div>
	
</body>
</html>
