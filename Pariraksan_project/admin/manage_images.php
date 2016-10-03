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
		
$query="select * from gallary";
		
	$result= mysql_query($query);
	
	

	
	while
	($row= mysql_fetch_array($result))
	{
		
	echo"<div class='singl_port'>";

	echo" <img src='upload_images/$row[pic]'> ";
	
   echo" <a href='delete_images.php?id=$row[id]'>Delete</a> ";  
   
   echo"</div>";
    
}
?>
</div>
</div>