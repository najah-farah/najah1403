
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
				<li><a href="HomePage">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="Logout.php">Logout</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>
		

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
					echo $a;
					$result = mysqli_query ($con,"select * from experiment WHERE as1=0 || as2=0 || as3=0 || as4=0 || as5=0  ");
					
					if ($result == "")
					{
 
						echo "no details found";
					}
					
						else
					{
						echo " <br/>";
						
 ?>
 <table>
		<tr class="alert alert-info" height="200">
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment ID</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Description</strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc">Teacher ID</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Assign EAO</strong></td>


		  </tr>
		  <?php

					while ($row = mysql_fetch_array($result))
					{
					echo " <br/>";

				?>
				<tr class="alert alert-info" height="200">
				<h2>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['experimentid']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['name']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['description']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['teacher']; ?></strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php 
		  

		  if ( $row['as1'] == 0 &&  $row['as2'] && 0 && $row['as3'] == 0 &&  $row['as4'] == 0 && $row['as5'] == 0)
		  {
			  $ab=$row['experimentid'];
			  echo "<a href='AssignEAO.php?a=$ab'>Press Assign</a>";
		  }
		  else{
			   echo "EAO assigned";
		  }
	 
		  ?></strong></td>
		  
		  
		  </h2>
		  </tr>
		   <?php
					}} ?>

  </Table>
  </form>
  <br/> <br/>
  <button class= "button" value="Create" onclick="window.location='HomePageAdmin.php' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah</a>
			</p>
		</div>
	</div>
</body>
</html>
