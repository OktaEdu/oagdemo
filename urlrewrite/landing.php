<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="../wamdemo.css">
    <title>Okta Acccess Gateway 201 Redirect App Landing Page</title>
  </head>
  <body>
  

 <div class="content">
    <h2>Okta Acccess Gateway 201 Redirect App Landing Page</h2>

<?php
if ($_SERVER['HTTP_FORWARDED']) {
        echo "*** You are going through the Gateway ***";
} else {
        echo " ***   You just bypassed the Gateway ***";
}
?>



	<p><a href="../" >Home</a></p>

    
  </body>
</html>
