
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
					$con=mysqli_connect("127.0.0.1:55994","root","","ethics_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
					session_start();


					
					$a=$_SESSION["gatekeeperPerson"];
					echo $a;
					$result = mysqli_query ($con,"select * from experiment WHERE as1=1  && ap1=0  ");
					
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
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Student Name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">Supervisor name</strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc">School</strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc">Student No</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Start Date</strong></td>
		   <td align="left" valign="middle" width="12%"><strong class="data_desc">Duration</strong></td>
		    <td align="left" valign="middle" width="12%"><strong class="data_desc">Experiment Description</strong></td>
			 <td align="left" valign="middle" width="12%"><strong class="data_desc">Approval</strong></td>


		  </tr>
		  <?php

					while ($row1 = mysql_fetch_array($result))
					{
					//echo " <br/>";
					$ab=$row1['experimentid'];
					$result1 = mysql_query ("select * from ethicsform WHERE title= $ab ");
					while ($row = mysql_fetch_array($result1))
					{
					echo " <br/>";
					

				?>
				<tr class="alert alert-info" height="200">
				<h2>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['name']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['supervisor']; ?></strong></td>
            <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['school']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['studentno']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['sdate']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['duration']; ?></strong></td>
			<td align="left" valign="middle" width="12%"><strong class="data_desc"><?php echo $row['des']; ?></strong></td>
          <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php 
		  

		  if ( $row1['ap1'] == 0 )
		  {
			  $ab=$row1['experimentid'];
			  echo "<a href='AssignApprove.php?a=$ab'>Press Approve</a>";
		  }
		  else{
			   echo "Approved";
		  }
	 
		  ?></strong></td>
		  
		  
		  </h2>
		  </tr>
		   <?php
					}} }?>

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
