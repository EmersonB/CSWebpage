<!DOCTYPE html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title> TJ Computer Science </title>

	   	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	   	
	  	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	 <script type="text/javascript">
	  window.setTimeout(function() {window.location = "http://71.62.99.75:1337/home.php";},500);
	 </script>	
  		
	</head>
	<body>
	<?php
 	$username = "XXXXXXXXXXXXXXXXXX"; 
  	$password = "XXXXXXXXXXXXXXXXXX";
  	$dbname = "XXXXXXXXXXXXXXXXXX";

  	$conn = new mysqli($servername, $username, $password, $dbname);

  	if ($conn->connect_error) {
    	die("connection failed: " . $conn->connect_error);
  	}
  	$sql = "INSERT INTO csinfo (id, name, description, urllink, type, submit_date) VALUES (NULL, '" . mysqli_real_escape_string($conn, $_POST["entryname"]) . "', '" . mysqli_real_escape_string($conn, $_POST["description"]) . "', '" .mysqli_real_escape_string($conn, $_POST["urllink"]) . "', " .mysqli_real_escape_string($conn,$_POST["itemtype"]) . ", now())";
  	//$sql = "INSERT INTO csinfo (id, name, description, urllink, type, submit_date) VALUES (NULL, '" . $_POST["entryname"] . "', '" . $_POST["description"] . "', '" . $_POST["urllink"] . "', " . $_POST["itemtype"] . ", now())";
	//echo $sql;
	//echo "<br>";
  	if($conn->query($sql) === TRUE) {
		echo " ";
		//echo "<h5> Entry successfully received! </h5>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
  	// hope it worked, don't give feedback as further injection attack prevention
  	
  	//echo $_POST["entryname"] . "<br/>";
  	//echo $_POST["urllink"] . "<br/>";
  	//echo $_POST["description"] . "<br/>";
  	//echo $_POST["itemtype"] . "<br/>";
  	//$conn->query()

	?>
	</body>
</html>
