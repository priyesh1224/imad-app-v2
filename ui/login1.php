<?php
session_start();
define("USER","priyesh");           //login only when user name is priyesh and password is vasani
define("PASS","vasani");
?>
<!DOCTYPE html>
<html>
<body>
<h1>login1</h1>
<h3>
<?php if(isset($_POST["user"])&&isset($_POST["pass"]))
{
    if($_POST["user"]==USER && $_POST["pass"]==PASS)
    {
       $_SESSION["authenticated"]=true;         //if username and passowrd matches then allowed to login
       $host=$_SERVER["HTTP_HOST"];           //http host is LOCALHOST in our case
       $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\"); //php self is /logins/login1.php in this case
       header("Location:http://$host$path/home.php");   //generalising redirection link instead of using http://localhost/logins/login1.php
        exit;                                           //as localhost will break if we move our files to any other server so in this case 
                                                         //php will itself find the correct link
       }
       }
       ?>



<?php if(count($_POST)>0) echo "invalid login"; // if data is submitted more then 0 times means user has tried logging in and it 
                                                //it would have exited so we are displying invalid login
                                                ?>  
<br>
<form action="login1.php" method="post">
<table>
<tr>
<td>USERNAME : </td>
<td><input name="user" type="text"></td>
</tr>
<tr>
<td>PASSWORD :</td>
<td><input name="pass" type="text"></td>
</tr>
<tr>
<td><input name="action" type="submit" value="Login"></td>
</tr>
</table>
</form>

</h3>
<br>
</body>
</html>
