<html>
<body>
Thanks for placing your order.Have a nice day !!!!
<br><br><br>
you selected: <br> <br>

<?php
$dom=simplexml_load_file("menu.xml");
$total=0;
foreach($dom->xpath("/MENU/head/item") as $new)
{ $num=$new["id"];
if(!empty($_POST["item$num"]))
{
$total=$total+$new->price;
echo $new->name;
echo "-------------".$new->price;
?><br><?php
}
}
?><br><br><?php print "your total bill is Rs.".$total;
?>
</body>
</html>