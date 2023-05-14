<?php

setcookie("set1", $_GET['s1'],time()+3600);
setcookie("set2", $_GET['c'],time()+3600);
setcookie("set3", $_GET['b'],time()+3600);
setcookie("set4", $_GET['s'],time()+3600);
echo "style is ".$_GET['s1'];
echo "<br> <br> color is" .$_GET['c'];
echo "<br> <br>background color is ".$_GET['b'];
echo "<br><br>size is ".$_GET['s'];
?>
<form action="setcookie1.php" method="get">
<input type=submit value=ok>
</form>
</body>
</html>

