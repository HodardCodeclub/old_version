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

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
.sub_menus a{
color:green;
font-weight:bolder;
padding:20px;
}
</style>


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
	$s="update news_categories set CatNAME='" . $_POST["t2"] ."' where CatID='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s)or die(mysqli_error($cn));
	mysqli_close($cn);
	echo "<script>alert('Record Updated');</script>";
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">

<center><div class='sub_menus'><a href="addcategory.php">New Category</a>|<a href="viewcategory.php">View categories</a>|<a href="updatecategory.php">Update Category</a>|<a href="deletecategory.php">Delete Category</a></div></center><br/>

<form method="post">
<table border="0" width="500px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Category</td></tr>
<tr><td class="lefttxt">Selected Category Name</td><td><select name="t1" required/><option value="" selected>Select category</option>



<?php
$cn=makeconnection();
$s="select * from news_categories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
echo"<option value=$data[0]>$data[1]</option>";
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
</form>
<form method="post">
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from news_categories where CatID='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Cat_id=$data[0];
$Cat_name=$data[1];


mysqli_close($cn);

}

?>

</td></tr>
<tr><td class="lefttxt">Category Name</td><td><input type="text"   value="<?php if(isset($_POST["show"])){ echo $Cat_name ;} ?>" name="t2" required pattern="[a-zA-z _]{3,30}" title"Please Enter Only Characters between 3 to 10 for Category Name"/><input type=hidden name=t1 value='<?php echo $_POST['t1']; ?>' /></td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
</table>
</form>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>



