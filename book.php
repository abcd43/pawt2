<html>
<body>
<pre>
<?php
	$Bookinfo = simplexml_load_file("book.xml");
	echo htmlspecialchars($Bookinfo -> asXML());
?>
</pre>
</body>
</html>
