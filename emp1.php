<?php
session_start();
$basic = $_POST['basic'];
$da = $_POST['da'];
$hra =$_POST['hra'];

echo "Employee Details";
echo "Emp ID :", $_SESSION['eno']."<br>";
echo "Emp Name :", $_SESSION['enm']."<br>";
echo "Emp Address :",$_SESSION['eadd']."<br><br>";

echo "Basic :".$basic."<br>";
echo "DA :".$da. "<br>";
echo "HRA :".$hra."<br>";

$total =$basic+$da+$hra;
echo "Total of earning Is :".$total;
?>
