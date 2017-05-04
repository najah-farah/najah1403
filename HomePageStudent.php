<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Ethics Approval System</title>

	<meta name="author" content="Najah" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">Ethics Approval System</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="Request.php">Request</a></li>
				<li><a href="Logout.php">Logout</a></li>
			</ul>

		</div>
		<div id="content">
		<?php
		session_start();
        echo "<h3>";
			echo "Welcome..... $_SESSION[gatekeeper]";
			echo "</h3>";

			?>
			<h2>Home</h2>
			<p>
				This is an Ethics Management System for the University RGU.
			</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah</a>
			</p>
		</div>
	</div>
</body>
</html>
