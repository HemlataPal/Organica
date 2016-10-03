<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
} 
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>
<div class="mnz_portf">
<div class="mnz_por">
<?php
	require('database.php');
		
$query="select * from category";
		
	$result= mysql_query($query);
	
	

	
	while
	($row= mysql_fetch_array($result))
	{
		
	echo"<div class='singl_port'>";
	echo"$row[cat_name]";

	echo" <img src='upload_cat/$row[pic]'> ";
	
   echo" <a href='delete_cat.php?cat_id=$row[cat_id]'>Delete</a> ";  
   
   echo"</div>";
    
}
?>
</div>
</div>