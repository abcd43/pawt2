<?php

session_start();
$eno =$_SESSION['eno'];
$enm =$_SESSION['enm'];
$eadd =$_SESSION['eadd'];
?>

<html>
<body>
<form action="emp1.php" method="post">
<center>
<h2>Enter Earring of Employee:</h2>
<label>Basic :</label>
<input type="text" name="basic"><br>
<label>DA :</label>
<input type="text" name="da"><br>
<label>HRA : </label>
<input type="text" name="hra"><br>
<input type="submit" value="submit">
</center>
</form>
</body>
</html>
