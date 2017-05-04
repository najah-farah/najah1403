
<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Ethics Approval System</</title>

	<meta name="author" content="Najah" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">Ethics Approval System</</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="EAORequest.php">Request</a></li>
				<li><a href="Logout.html">Logout</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>

   <?php
					error_reporting('0');
					//include("db_conf.php");
					$con=mysqli_connect("127.0.0.1:56686","root","s12s21s34s43","ethics_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
					session_start();


					$ab=$_GET["a"];
					
					
					
					
					
						
						$sql ="UPDATE experiment SET ap1=1 WHERE experimentid=$ab";
						mysqli_query ($con,$sql) or die(mysqli_error()."<br>".$sql);
						
						header ("Location: EAORequest.php");
					

				?>

  
  </form>
  <button class= "button" value="Create" onclick="window.location='CreateExperiment.html' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah</a>
			</p>
		</div>
	</div>
</body>
</html>
