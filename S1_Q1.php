<?php
session_start();
//print_r($_SESSION);
?>

<html>
<head>
<title>Session</title>
</head>
<body>
<?php

	if(isset($_SESSION['count']))
		$_SESSION['count']=$_SESSION['count']+1;
	else
		$_SESSION['count']=$_SESSION['count']=1;
		echo $_SESSION['count']." times the web page has been accessed";
?>
</body>
</html>