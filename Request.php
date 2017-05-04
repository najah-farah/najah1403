
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
				<li><a href="Logout.php">Logout</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Login</h2>
      <form action="LoginPage.php">
        <p>
		

   <?php
					error_reporting('0');
					include("db_conf.php");
					session_start();

					
					$a=$_SESSION["gatekeeperPerson"];
					echo "User : ".$a;
					//$result = mysqli_query ("select * from experiment WHERE student1='$a' or student2='$a' or student3='$a' or student4='$a' or student5='$a'");
                    $result = mysqli_query ($con,"select * from experiment WHERE student1='$a' or student2='$a' or student3='$a' or student4='$a' or student5='$a'");


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
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Ethics Form Submission</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Ethics Form is Assigned to EAO</strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc">Ethics Form is Approved</strong></td>

		  </tr>
		  <?php

					while ($row = mysqli_fetch_array($result))
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
		  
		  if (($row['student1'] == $a && $row['sb1'] == 0) || ($row['student2'] == $a && $row['sb2'] == 0) || ($row['student3'] == $a && $row['sb3'] == 0) || ($row['student4'] == $a && $row['sb4'] == 0) || ($row['student5'] == $a && $row['sb5'] == 0))
		  {
			  $ab=$row['experimentid'];
			  echo "<a href='EthicsForm.php?a=$ab'>Fill Ethic Form</a>";
		  }
		  else{
			  echo "Ethics Form submitted";
		  }
	 
		  ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php 
		  if (($row['student1'] == $a && $row['as1'] == 0) || ($row['student2'] == $a && $row['as2'] == 0) || ($row['student3'] == $a && $row['as3'] == 0) || ($row['student4'] == $a && $row['as4'] == 0) || ($row['student5'] == $a && $row['as5'] == 0))
		  {
			  echo "Not yet assigned to the EAO";
		  }
		  else{
			  echo "Already assigned to the EAO";
		  }
	 
		  ?></strong></td>
		  <td align="left" valign="middle" width="12%"><strong class="data_desc"><?php 
		  if (($row['student1'] == $a && $row['ap1'] == 0) || ($row['student2'] == $a && $row['ap2'] == 0) || ($row['student3'] == $a && $row['ap3'] == 0) || ($row['student4'] == $a && $row['ap4'] == 0) || ($row['student5'] == $a && $row['ap5'] == 0))
		  {
			  echo "Not yet approved";
		  }
		  else{
			  echo "Approved";
		  }
		  ?></strong></td>
		  
		  </h2>
		  </tr>
		   <?php
					}} ?>

  </Table>
  </form>
  <br/> <br/>
  <button class= "button" value="Create" onclick="window.location='HomePageStudent.php' ;">Go Back</button>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah</a>
			</p>
		</div>
	</div>
</body>
</html>
