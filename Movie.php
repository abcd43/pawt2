<?php
$dom = new DomDocument();
$dom->load("Movie.xml");

//print_r($xml); 

echo "Name of Movies<br>";
$mname = $dom->getElementsByTagName("MovieTitle");
foreach($mname as $m)
{
	echo "<b>$m->textContent<b><br>";
}
$mname = $dom->getElementsByTagName("ActorName");
foreach($mname as $m)
{
	echo "<b>$m->textContent<b><br>";
}
?>
