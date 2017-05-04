
<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>My First Website</title>

	<meta name="author" content="Najah" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">My First Website</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="#/about.html">About</a></li>
				<li><a href="#/contact.html">Contact</a></li>
				<li><a href="LoginPage.html">Login</a></li>
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


					$a=$_GET["name"];
					$b=$_GET["supervisor"];
					$c=$_GET["school"];
					$d=$_GET["sno"];
					$e=$_GET["program"];
					$f=$_GET["title"];
					$g=$_GET["sdate"];
					$h=$_GET["duration"];
					$i=$_GET["nhsradio"];
					$j=$_GET["humanradio"];
					$k=$_GET["des"];
					$l=$_GET["fileToUpload"];
					$m=$_GET["confirm1"];
					$n=$_GET["confirm2"];
					
					
					
					if ($a !="" and $b !="" and $c !="" and $d !="" and $e !="" and $f !="" and $g !="" and $h !="" and $i !="" and $j !="" and $k !=""  and $m =="True" and $n =="True"){
						$sql ="INSERT INTO ethicsform (name, supervisor, school, studentno, program, title, sdate, duration, nhs,human, des,fileupload) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
						mysqli_query ($con,$sql) or die(mysqli_error()."<br>".$sql);
						$sql ="UPDATE experiment SET sb1=1 WHERE experimentid=$f";
						mysqli_query ($con,$sql) or die(mysqli_error()."<br>".$sql);
						
						header ("Location: HomePageStudent.php");
					}
					else{
						echo "You have to fill everyfield and select both checkboxes";
						
					}

				?>

  
  </form>
  <button class= "button" value="Create" onclick="window.location='CreateExperiment.html' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[Najah]</a>
			</p>
		</div>
	</div>
</body>
</html>
