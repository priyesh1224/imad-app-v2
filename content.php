<html>
<body>
 <div align="center">
 <div style="background-color:red">My PIZZA shop <br> <br></div> <br> </div>


<?php
 $dom=simplexml_load_file("menu.xml");
?> <form action="order.php" method="post"><?php
foreach($dom->xpath("/MENU/head") as $newhead)
{
   ?><br><br><?php
 echo $newhead["name"];
   ?><br><br><?php
 foreach($newhead->item as $new)
 {
 print $new->name; 
 print "--------------------------------------Rs.".$new->price;?>
  <input type="checkbox" name="item<?php echo$new["id"]?>"<br>
  <br>
 <?php
 }
}
 ?>
 <input type="submit" value="go">
 </form>
 </body>
 
 </html>