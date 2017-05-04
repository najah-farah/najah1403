
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
			<!--<h2>Login</h2>-->
      <form action="LoginPage.php">
        <p>
		<table>
		<tr class="alert alert-info" height="200">
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment ID</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Description</strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 1 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 2 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 3 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 4 ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Student 5 ID</strong></td>
		  </tr>

   <?php
					error_reporting('0');
					//include("db_conf.php");
					$con=mysqli_connect("127.0.0.1:56686","root","","ethics_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
					session_start();


					
					$a=$_SESSION["gatekeeperPerson"];
					$result = mysqli_query ($con,"select * from experiment WHERE teacher='$a'  ");
					
					if ($result == "")
					{
 
						echo "no details found";
					}
						else
					{
						echo " <br/>";
 

					while ($row = mysqli_fetch_array($result))
					{
					echo " <br/>";

				?>
				<tr class="alert alert-info" height="200">
				<h2>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['experimentid']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['name']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['description']; ?></strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student1']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student2']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student3']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student4']; ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['student5']; ?></strong></td>
		  </h2>
		  </tr>
		   <?php
					}} ?>

  </Table>
  </form>
  <br/> <br/>
  <button class= "button" value="Create" onclick="window.location='HomePageLecturer.php' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[Najah]</a>
			</p>
		</div>
	</div>
</body>
</html>
