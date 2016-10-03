<link rel="stylesheet" href="style.css"/>


<?php include("database.php");
if(isset($_POST['OK']))
{
 $sql=mysql_query("select * from admin");
 $user=$_POST['username'];
 $pass=$_POST['password'];
while($row=mysql_fetch_assoc($sql))
{
 $username=$row['username'];
 $password=$row['password'];
if(($user==$username)&&($pass==$password))
{
 session_start();
 $_SESSION['adminid']=$user;
 $_SESSION['password'] = $pass;
 ?>
<script>location.href="admin_panel.php"</script>
<?php
}
else
{

?>

<script>
alert('Invalid Username/Password.Please try again');
location.href="index.php"</script>

<?php 
}
}}
?>

<div class="wrapp">
<div class="background1"> 	
<div class="container">
<div class="hed_mn"><img src="imgs/logo.png" /></div>
<!--<div class="lft_side">
</div>-->
<div class="rht_side">
<form action="" method="post">

<table border="0" align="center">
<h1 style="float:left; font-size:34px; color:#FFF; margin:40px 0px 0px 250px; position:absolute; z-index:999; letter-spacing:3px">LOGIN PANEL</h1>
<tr><td>USERNAME</td>
<td><input type="text" name="username" value=""></td></tr>

<tr><td>PASSWORD</td>
<td><input type="password" name="password" value=""></td></tr>

<tr><td><button type="submit" name="OK">Login</button></td></tr>
</table>
</form>
</div>
</div>
</div>
</div>



