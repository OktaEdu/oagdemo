<html lang="en">
<head>
<title>Okta Access Gateway Demo</title>
<link rel="stylesheet" href="../wamdemo.css">
</head>
<body>
<table>
<tr>
<th>Header</th>
<th>Value</th>
</tr>
<?php
foreach ($_SERVER as $parm => $value) {
	if (preg_match("/^HTTP_/",$parm)) {
		echo "<tr><td>";
		echo "$parm";
		echo "</td><td>";
		echo "$value";
		echo "</td></tr>";
	}
}
?>
</table><p>
<a href="../"> Return to Public Page</a> <p>
</body>
</html>
