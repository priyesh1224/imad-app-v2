<?php
session_start();                     //using function and setting cookie // same as login3 just another try
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
<div style="background:red">

<h1>login3</h1>
<h3>
<?php if(isset($_POST["user"])&&isset($_POST["pass"]))
{
    if($_POST["user"]==USER && $_POST["pass"]==PASS)
    {
       $_SESSION["authenticated"]=true;   
       setcookie("user","c4361rosfmqnueh69tignh0a71",time()+7*24*60*60);        //time() gives current time in secounds adding 7 days in secounds
       //         key      value         time for which cookie will be remembered
        redirect("home.php");                                           
       }
       }
       ?>



<?php if(count($_POST)>0) echo "invalid login"; // if data is submitted more then 0 times means user has tried logging in and it 
                                                //it would have exited so we are displying invalid login
                                                ?>  
<br>
 <form action="login3.php" method="post"> 
<table>
<tr>
<td>USERNAME : </td>
<?php if(isset($_POST["user"])) { ?>
<td><input name="user" type="text" value="<?php echo"{$_POST["user"]}"; ?>"></td>
<?php } else if(isset($_COOKIE["user"])){ ?>
<td><input name="user" type="text" value="<?php echo"{$_COOKIE["user"]}"; ?>"></td>
<?php } else { ?>
<td><input name="user" type="text"></td>
<?php } ?>
</div>


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
