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
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

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

<?php include('function.php'); 

if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$target_dir = "subCatProfiles/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

if (empty($_FILES['t3']['name'])) {
	
	$s="update subcategories set SubName='" . $_POST["t1"] ."',Category='" . $_POST["t2"] . "',Details='" . $_POST["t4"] . "' where SubID='" . $_POST["s1"] . "'";
	
}
else
{
	
		 $s="update subcategories set SubName='" . $_POST["t1"] ."',Category='" . $_POST["t2"] . "',Profile='".basename($_FILES["t3"]["name"])."', Details='" . $_POST["t4"] . "' where SubID='" . $_POST["s1"] . "'";
		 move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file);
		 }
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
<center><div class='sub_menus'><a href="addsubcategory.php">New SubCategory</a>|<a href="viewsubcategory.php">View Subcategories</a>|<a href="updatesubcategory.php">Update SubCategory</a>|<a href="deletesubcategory.php">Delete SubCategory</a></div></center><br/>

<form method="post" enctype="multipart/form-data">
<table border="0" width="450px" height="500px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Subcategory</td></tr>
<tr><td class="lefttxt">Select Subcategory</td><td><select name="s1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from subcategories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from subcategories where SubID='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Subcatid=$data[0];
$Subcatname=$data[1];
$Catid=$data[2];
$Pic=$data[3];
$Detail=$data[4];
$select_cat=mysqli_query($cn,"SELECT CatNAME from news_categories WHERE CatID='$Catid'");
$cat=mysqli_fetch_array($select_cat);
mysqli_close($cn);

}

?>

</td></tr>

<tr><td class="lefttxt">Subcategory Name</td><td><input type="text" value="<?php if(isset($_POST["show"])){ echo $Subcatname ;} ?> " name="t1" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for Subcategory Name" /></td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2"  value="<?php if(isset($_POST["show"])){ echo $Catid;} ?> " required="required" pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Company name"/><option value="Select"><?php echo $cat[0]; ?></option>

<?php
$cn=makeconnection();
$s="select * from news_categories";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"]) && $data[0]==$Catid)
	{
		echo "<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
	
}
mysqli_close($cn);
?>
</select>

<tr><td class="lefttxt">Old Pic</td><td><img src="subCatProfiles/<?php echo @$Pic; ?>" width="150px" height="100px" / >
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Pic;} ?>" />
</td></tr>

<tr><td class="lefttxt">Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td class="lefttxt">Details</td><td><textarea name="t4" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>

</table>
</form>

</div>


</div>
<?php include('bottom.php'); ?>

</body>
</html>


             