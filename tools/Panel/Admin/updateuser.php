<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
<!--<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>-->

<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.sub_menus a{
color:green;
font-weight:bolder;
padding:20px;
}
</style>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update users set Password='" . $_POST["t2"] ."',Utype='" . $_POST["s1"] . "' where UsID='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

<center><div class='sub_menus'><a href="adduser.php">New user</a>|<a href="updateuser.php">Update User</a>|<a href="deleteuser.php">Delete User</a></div></center><br/>
<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update User</td></tr>
<tr><td class="lefttxt">Select User</td><td><select name="t1" required/><option value="" selected=selected>Select user</option>

<?php
$cn=makeconnection();
$s="select * from users";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
echo"<option value=$data[0] >$data[1] (".$data[2].")</option>";
	 /*if(isset($_POST["show"])&& $data[1]==$_POST["t1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[0]</option>";
	}
	8
	*/
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
</form>
<form method=post>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from users where UsID='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Username=$data[3];
$Pass=$data[4];
$Usertype=$data[5];
$names=$data[1];

mysqli_close($cn);

}

?>

</td></tr>
<tr><td class="lefttxt" colspan=2 align=center> <?php  if(isset($_POST["show"])) echo "$names"; ?></td></tr>
<tr><td class="lefttxt">Password</td><td><input type="password"  value="<?php if(isset($_POST["show"])){ echo $Pass ;} ?>" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Password"/><input type=hidden name=t1 value='<?php echo $_POST['t1']; ?>' /></td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" value="<?php if(isset($_POST["show"])){ echo $Pass ;} ?>" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Password"/></td></tr>
<tr><td class="lefttxt">Type of User</td><td><select name="s1" required /><option value="">Select</option>
<option value="Admin" <?php if(isset($_POST["show"])&& $Usertype=="Admin"){ echo "selected"; } ?>>Admin</option>
<option value="General" <?php if(isset($_POST["show"])&& $Usertype=="General"){ echo "selected"; } ?>>General</option>
</select></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
</table>
</form>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>
