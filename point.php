<?php
	session_start();
	if($_SESSION['Member_ID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}

	mysql_connect("localhost","root","root");
	mysql_select_db("test");
	$strSQL = "SELECT * FROM member WHERE Member_ID = '".$_SESSION['Member_ID']."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>จัดการแต้ม</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
	<meta name="author" content="www.html5xcss3.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
</head>
<body class="home-page">
	<div class="wrap-body">
		<div class="header">
			<div id='cssmenu' >
				<ul>
				   <li><img src="images/f.png" width="150" height="150"></li>
				     <li><a href='index.html'><span>หน้าแรก</span></a></li>
				   <li><a href='check.html'><span>ตรวจสอบ</span></a></li>
				</ul>
			</div>
		</div>
	</div>
  <body>
    <br></br>
  <h2 class="w3-myfont w3-center">จัดการเเต้ม</h2>
  <br></br>
  <div class="w3-row">
  <div class="w3-col m3 "><p></p></div>
  <div class="w3-col m6 w3-round-xxlarge w3-light-blue w3-center"><p>ลำดับ XXX</p>
  <br>ชื่อสมาชิก XXX<br>
<br>เเต้มสะสม XXX<br>
<select name="P_Status">
<option value="" selected>--โปรโมชั่น--</option>
<option value="P_submit">โปรโมชั่น1</option>
<option value="P_operate">โปรโมชั่น2</option>
<option value="P_Payment">โปรโมชั่น3</option>
</select></td><br></br>
<button class="w3-button w3-round-xlarge w3-teal" style="width:100px">ยืนยัน</button></div>

  <div class="w3-col m3 "><p></p></div>
</div>
