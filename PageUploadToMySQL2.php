<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = mysql_connect("localhost","root","test") or die("Error Connect to Database");
		$objDB = mysql_select_db("test");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(FilesName) VALUES ('".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL);
	}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>
