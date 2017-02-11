<?php
session_start();                     //using function
define("USER","priyesh");           //login only when user name is priyesh and password is vasani
define("PASS","vasani");

function redirect($file)
{	
		$host=$_SERVER["HTTP_HOST"];           //http host is LOCALHOST in our case
       $path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\"); //php self is /logins/login1.php in this case
       header("Location:http://$host$path/$file");
       exit;
       }

?>
<!DOCTYPE html>
<html>
<body>
<h1>login2</h1>
<h3>
<?php if(isset($_POST["user"])&&isset($_POST["pass"]))
{
    if($_POST["user"]==USER && $_POST["pass"]==PASS)
    {
       $_SESSION["authenticated"]=true;         
        redirect("home.php");                                           
       }
       }
       ?>



<?php if(count($_POST)>0) echo "invalid login"; // if data is submitted more then 0 times means user has tried logging in and it 
                                                //it would have exited so we are displying invalid login
                                                ?>  
<br>
 <form action="login2.php" method="post"> 
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
