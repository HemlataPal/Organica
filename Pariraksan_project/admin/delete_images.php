<?php
session_start();
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>
<?php require("database.php");?>
<?php
		
$query="delete from gallary where id=".$_GET['id'];
		
	$result= mysql_query($query);
    if($result)
    header('location:admin_panel2.php?id=manage_images');
    else
    echo'pic is not deleted';
    ?>
    
    