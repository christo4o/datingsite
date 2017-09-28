<?php
	ob_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link rel="icon" href="./images/flame_large_vJV_icon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/webd3201.css" />
	<!--
	Authors: Christopher O'Marra, Erik Kostashuk, Harsh Yadav, Brenden Demetorff
	Filename: <?php echo $filename;?>
	Date: <?php echo $date;?>
	Description: <?php echo $description;?>
	-->
	<?php require_once './includes/constants.php';?>
  <?php require_once './includes/db.php';?>
  <?php require_once './includes/functions.php';?>
	<title><?php echo $title;?></title>
</head>
<body>
<div id="container">
	<div id="header">
		<img src="./images/flame-large.png" alt="site logo" />
		<h1>
			I'll show you my Ember if you show me yours
		</h1>
	</div>
  <div id="hnavbar">
		<ul>
      <li><a href="./index.php">Home Page</a></li>
      <li><a href="./profile-create.php">Create Profile</a></li>
      <li><a href="./profile-display.php">Profile Display</a></li>
      <li><a href="./profile-search-results.php">Search Results</a></li>
      <li><a href="./profile-search.php">Search</a></li>
      <li><a href="./user-dashboard.php">User Dashboard</a></li>
      <li><a href="./user-login.php">Login</a></li>
      <li><a href="./user-register.php">Register</a></li>
		</ul>
	</div>
	<div id="content-container">
		<h2><?php echo $banner;?></h2>
