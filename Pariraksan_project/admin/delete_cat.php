<?php
session_start();
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>
<?php require("database.php");?>
<?php
		
$query="delete from category where cat_id=".$_GET['cat_id'];
		
	$result= mysql_query($query);
    if($result)
    header('location:admin_panel2.php?id=manage_cat');
    else
    echo'Category is not deleted';
    ?>
    
    