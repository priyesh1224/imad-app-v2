<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>HOME</h1>
<h3>
<?php if(@$_SESSION["authenticated"]) { ?>
 you are logged in !!!!! 
<br>
<a href="logout.php">logout</a>
<?php } else { ?>
you are not logged in 
<?php } ?>
</h3>
<br>
<b>login demos </b>
<ul>
<li><a href="../login1.php">login1</a></li>
<li><a href="../login2.php">login2</a></li>
<li><a href="../login3.php">login3</a></li>
<li><a href="../login4.php">login4</a></li>
</ul>
</body>
</html>
