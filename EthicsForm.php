
<html>
<head>

<!-- your webpage info goes here -->

    <title>Ethics Approval System</title>

	<meta name="author" content="najah" />
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
      <form action="EthicsFormProcess.php">

    <input type="text" id="name" name="name" placeholder="<?php session_start(); echo $_SESSION["gatekeeper"]; ?>" >

    <input type="text" id="supervisor" name="supervisor" placeholder="Supervisor">

    <input type="text" id="school" name="school" placeholder="School / Unit">

    <input type="text" id="sno" name="sno" placeholder="<?php echo $_SESSION["gatekeeperPerson"]; ?>">

    <input type="text" id="program" name="program" placeholder="Programme enrolled on">

    <input type="text" id="title" name="title" placeholder="<?php $a=$_GET['a']; echo $a;?>">

    <input type="text" id="sdate" name="sdate" placeholder="Expected start date of data collection">

    <input type="text" id="duration" name="duration" placeholder="Approximate duration of data collection">

    <label for="nhsradio">Will the study involve NHS patients or staffs? </label>
    <br/>
    <input type="radio" name="nhsradio" value="Yes" > Yes
    <br/>
    <input type="radio" name="nhsradio" value="No" checked> No

    <label for="humanradio">Will the study involve taking laptob and computer on the lab?</label>
    <br/>
    <input type="radio" name="humanradio" value="Yes" > Yes
    <br/>
    <input type="radio" name="humanradio" value="No" checked> No
    <label for="brief">In no more than 5000 characters, give a non-technical summary of the project </label>
    <br/>
    <br/>
    <textarea rows="10" name="des" cols="50" maxlength="5000" placeholder= "Enter test here..."> </textarea>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br/>
    <input type="checkbox" name="confirm1" value="True">   I confirm that this project conforms with the RGU Met Research Governance Framework<br>
    <input type="checkbox" name="confirm2" value="True">    I confirm that I will abide by the RGU Met requirements regarding confidentiality and anonymity when conducting this project.<br>
    <input type="submit" value="Submit">
  </form>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">Najah</a>
			</p>
		</div>
	</div>
</body>
</html>
